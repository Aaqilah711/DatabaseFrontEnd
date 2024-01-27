<?php
include("database.php");

$db = $conn;
$tableName = "plasmid";
$columns = ['vsr_no','ConfirmedBy', 'CommonPlasmid', 'AntibSelectionMarker', 'PlasmidDescription', 'PlasmidDate', 'Concentration', 'TotalVolume', 'Purity', 'RelatedTo', 'Remarks', 'Credit1', 'Credit2', 'Credit3', 'Upload'];

// Fetch data from plasmid table
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $result = $db->query($query);

        if ($result == true) {
            if ($result->num_rows > 0) {
                // Fetch plasmid data
                $plasmidData = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = [];

                // Loop through each plasmid data
                foreach ($plasmidData as $plasmid) {
                    $vsr_no = $plasmid['vsr_no'];

                    // Fetch related data from other tables
                    $relatedData = [];
                    $relatedData['plasmid'] = $plasmid;

                    
                    $stquery = "SELECT student.StName AS StuName, ownedby.Others AS ob_others 
                            FROM $tableName 
                            INNER JOIN ownedby ON $tableName.vsr_no = ownedby.vsr_no
                            INNER JOIN student ON ownedby.StudentID = student.StudentID";
                    $stresult = $db->query($stquery);
                    if ($stresult->num_rows > 0) {
                        $relatedData['obstudent'] = mysqli_fetch_assoc($stresult);
                    }

                    

                    $stquery = "SELECT student.StName AS StuName, isolatedby.Others AS ib_others 
                            FROM $tableName 
                            INNER JOIN isolatedby ON $tableName.vsr_no = isolatedby.vsr_no
                            INNER JOIN student ON isolatedby.StudentID = student.StudentID";
                    $stresult = $db->query($stquery);
                    if ($stresult->num_rows > 0) {
                        $relatedData['ibstudent'] = mysqli_fetch_assoc($stresult);
                    }
                    

                    $msg[] = $relatedData;
                }
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
?>

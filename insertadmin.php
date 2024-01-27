<?php
include("database.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    

    // Define variables and initialize with empty values
    $plasmidNo = $plasmidType = $owner = $ownerOthers = $plasmidDescription = $confirmedBy = "";
    $selectionMarker = $isolatedBy = $others = $date = $concentration = $totalVolume = "";
    $purity = $relatedTo = $remarks = $credit1 = $credit2 = $credit3 = "";

    // Process form data when the form is submitted
    $plasmidNo = $_POST['plasmidNo'];
    $plasmidType = $_POST['plasmidType'];
    $owner = $_POST['owner'];
    $ownerOthers = $_POST['ownerOthers'];
    $plasmidDescription = $_POST['plasmidDescription'];
    $confirmedBy = $_POST['confirmedBy'];
    $selectionMarker = $_POST['selectionMarker'];
    $isolatedBy = $_POST['isolatedBy'];
    $others = $_POST['others'];
    $date = $_POST['date'];
    $concentration = $_POST['concentration'];
    $totalVolume = $_POST['totalVolume'];
    $purity = $_POST['purity'];
    $relatedTo = $_POST['relatedTo'];
    $remarks = $_POST['remarks'];
    $credit1 = $_POST['credit1'];
    $credit2 = $_POST['credit2'];
    $credit3 = $_POST['credit3'];
    $plasmidMap=$_POST['plasmidMap'];

    $sql = "INSERT INTO plasmid (vsr_no, ConfirmedBy, CommonPlasmid, AntibSelectionMarker, PlasmidDescription, PlasmidDate, Concentration, TotalVolume, Purity, RelatedTo, Remarks, Credit1, Credit2, Credit3,Upload)
            VALUES ('$plasmidNo','$confirmedBy','$plasmidType','$selectionMarker','$plasmidDescription','$date','$concentration','$totalVolume','$purity','$relatedTo','$remarks','$credit1','$credit2','$credit3','$plasmidMap')";

    $sql2="INSERT INTO ownedby (StudentID,vsr_no,Others) 
            VALUES ('$owner','$plasmidNo','$ownerOthers')";
    
    $sql3="INSERT INTO isolatedby (StudentID,vsr_no,Others) 
            VALUES ('$isolatedBy' ,'$plasmidNo','$others')";
    
    $query1 = mysqli_query ($conn, $sql);
    $query2 = mysqli_query ($conn, $sql2);
    $query3 = mysqli_query ($conn, $sql3);
            if($query1 && $query2 && $query3) {
                    header('location: viewadmin.php');
            }
            else {
                    echo 'Error Occurred';
            }

        }
    
?>
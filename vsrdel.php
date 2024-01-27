<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $vsr_no = $_POST['del'];

    $select = mysqli_query($conn, "SELECT * FROM plasmid WHERE vsr_no = '$vsr_no'");
            
    if(mysqli_num_rows($select)==0) {
        echo "Invalid VSR Number";
    }
    
    else{
    $delete1 = mysqli_query($conn,"DELETE FROM isolatedby WHERE vsr_no = '$vsr_no'");
    $delete2 = mysqli_query($conn,"DELETE FROM ownedby WHERE vsr_no = '$vsr_no'");
    $delete = mysqli_query($conn,"DELETE FROM plasmid WHERE vsr_no = '$vsr_no'");

    $check = mysqli_query($conn, "SELECT * FROM plasmid WHERE vsr_no = '".$vsr_no."'");

    // Bind parameters
    // $statement->bind_param("s", $vsr_no);

    // Execute the statement
    if(mysqli_num_rows($check)) {
        if($query) {
            echo "VSR Plasmid Number successfully deleted";
        }
        else {
                echo 'Error Occurred';
        }

        }
    }
    }
    
else{
        die("Connection failed: " . mysqli_connect_error());
    }
?>

<!-- <script>
    // Wait for the document to be fully loaded
    function popup(){
    // document.addEventListener("DOMContentLoaded", function() {
    //     // Show popup when document is ready
    //     window.onload = function() {
    //         // Show success message
            var result = confirm("Plasmid VSR Succesfully Deleted");
            // Redirect to admin.html if OK is clicked
            if (result) {
                window.location.href = "admin.html";
            }
        };
    // });
    // }
</script> -->
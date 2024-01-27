<?php
include("database.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    

    // Define variables and initialize with empty values
    $stuName = $stuID = $phone = "";

    // Process form data when the form is submitted
    $stuName = $_POST['StuName'];
    $stuID = $_POST['StudentID'];
    $phone = $_POST['PhoneNo'];
    

    $sql="INSERT INTO student (StudentID,StName,PhoneNo) 
            VALUES ('$stuID','$stuName','$phone')";
    
    
    $query = mysqli_query ($conn, $sql);
   
            if($query) {
                echo "<script></script>";
            }
            else {
                    echo 'Error Occurred';
            }

        }
    
?>
<script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Show popup when document is ready
        window.onload = function() {
            // Show success message
            var result = confirm("Student details successfully updated");
            // Redirect to admin.html if OK is clicked
            if (result) {
                window.location.href = "admin.html";
            }
        };
    });
</script>
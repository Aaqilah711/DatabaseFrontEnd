<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plasmiddb";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn) {
        if( isset ($_POST['search']) ) {
            $search= $_POST['search'];
            
           

            
            $select = mysqli_query($conn, "SELECT * FROM plasmid WHERE vsr_no = '".$_POST['search']."'");
            
            if(mysqli_num_rows($select)) {
               
                    echo "Plasmid VSR Number Found";
            }
            else {
                    echo 'Plasmid VSR Number Not Found';
            }

        }
    }
    else{
        die("Connection failed: " . mysqli_connect_error());
    }
?>
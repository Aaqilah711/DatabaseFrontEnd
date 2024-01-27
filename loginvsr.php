<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "plasmiddb";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn) {
        
    
        if( isset ($_POST['LoginUser']) && isset ($_POST['LoginPW'])) {
            $LoginUser= $_POST['LoginUser'];
            $LoginPW =$_POST['LoginPW'];
            
           

            
            $select = mysqli_query($conn, "SELECT * FROM logintable WHERE LoginUser = '$LoginUser' AND LoginPW='$LoginPW'");
            if(mysqli_num_rows($select)) {
               
                if ($LoginUser=='Lab_User'){
                    header('location: lab.html');}
                else {
                    if ($LoginUser=='admin'){
                        header('location:admin.html');}
                }
            }
            else {
                   echo("Wrong username");
                    
            }

        }
    }
    else{
        die("Connection failed: " . mysqli_connect_error());
    }
?>
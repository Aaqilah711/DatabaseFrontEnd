
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Details</title>
    <!-- Link to your login page styles -->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Add any additional styles if needed for the form -->
    <style>
        /* Add form-specific styles here */
        body {
            background-color: #ffffff;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #c3c5c2;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
        }

        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border-radius: 2cm;
            box-sizing: border-box;
        }

        .form-container-btn {
            background-color: #d41872;
            color: #fff;
            padding: 10px;
            border: none;
            
            cursor: pointer;
        }

        .form-container-btn:hover {
            background-color: #a68ea9;
            
            
        }
        .form2-container-btn {
            background-color: #477674;
            color: #fff;
            padding: 7px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            height:40px
        }

        .form2-container-btn:hover {
            background-color: #a68ea9;
        }
        .cont2{
            padding-top:6px;
            padding-bottom:6px;
            padding-left: 1100px;
        }
    </style>
</head>
<body>
    <div class="cont2">
            <button class="form2-container-btn"  onclick="location.href = 'admin.html';">Return to Home Page</button>
    </div>
    <div class="limiter">
        <div class="container-login100">
            <div class="form-container">
                <h2 class="login100-form-title p-b-41" style="color:#454444">New Student Details</h2>
                <form id="studentForm" action="stuinsert.php" method="post">

                    <label for="StudentID">Student ID</label>
                    <input type="text" id="StudentID" name="StudentID" required>

                    

                    <label for="StuName">Student Name</label>
                    <input type="text" id="StuName" name="StuName">

                    <label for="PhoneNo">Phone Number</label>
                    <input type="number" id="PhoneNo" name="PhoneNo">

                    

                    

                    <button type="submit" class="form-container-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!-- Include scripts as needed -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

    <!-- Your additional form-specific scripts can be added here -->

</body>
</html>

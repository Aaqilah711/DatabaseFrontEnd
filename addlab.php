<?php
include("database.php");

// SQL part
$sql = mysqli_query($conn, "SELECT StName,StudentID FROM student");
$data = $sql->fetch_all(MYSQLI_ASSOC);

// HTML part
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSR Plasmid Form</title>
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
            <button class="form2-container-btn"  onclick="location.href = 'lab.html';">Return to Home Page</button>
    </div>
    <div class="limiter">
        <div class="container-login100">
            <div class="form-container">
                <h2 class="login100-form-title p-b-41" style="color:#454444">VSR Plasmid Details</h2>
                <form id="plasmidForm" action="insertlab.php" method="post">
                    <label for="plasmidNo">VSR Plasmid No</label>
                    <input type="text" id="plasmidNo" name="plasmidNo" required>

                    <label for="plasmidType">Common or Specific</label>
                    <div style="padding-bottom: 10px">
                    <select id="plasmidType" name="plasmidType" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                        <option value="common">Common</option>
                        <option value="specific">Specific</option>
                    </select>
                    </div>

                    <label for="owner">Owner</label>
                    <div style="padding-bottom: 10px">
                        <select id="owner" name="owner" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                        
                        <?php
                        foreach ($data as $row): ?>
                        <option value="<?php echo $row['StudentID']; ?>"><?php echo $row['StName'], " - ", $row['StudentID'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>

                    <label for="ownerOthers">Owner Others (if the plasmid generated by a student)</label>
                    <div style="padding-bottom: 10px">
                        <select id="ownerOthers" name="ownerOthers" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                        
                        <?php
                        foreach ($data as $row): ?>
                        <option value="<?php echo $row['StudentID']; ?>"><?php echo $row['StName'] , " - ", $row['StudentID'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    
                    <label for="plasmidDescription">Plasmid Description</label>
                    <textarea id="plasmidDescription" name="plasmidDescription" rows="4" cols="60" required></textarea>

                    <label for="confirmedBy">Confirmed by RD/Seq/IFA (Plasmid confirmation)</label>
                    <div style="padding-bottom: 10px">
                        <select id="confirmedBy" name="confirmedBy" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                            <option value="RD">RD</option>
                            <option value="Seq">Seq</option>
                            <option value="IFA">IFA</option>
                            <option value="RDandSeq">RD and Seq</option>
                            <option value="SeqandIFA">Seq and IFA</option>
                            <option value="RDandIFA">RD and IFA</option>
                            <option value="All">All</option>
                        </select>
                    </div>
                    

                    <label for="selectionMarker">Antibiotic Selection Marker</label>
                    <div style="padding-bottom: 10px">
                        <select id="selectionMarker" name="selectionMarker" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                            <option value="Amp">Amp</option>
                            <option value="Kan">Kan</option>
                            <option value="Chlorom">Chlorom</option>
                            <option value="Neo">Neo</option>
                            <option value="Pur">Pur</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                   

                    <label for="isolatedBy">Plasmid Isolated by</label>
                    <div style="padding-bottom: 10px">
                        <select id="isolatedBy" name="isolatedBy" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                        
                        <?php
                        foreach ($data as $row): ?>
                        <option value="<?php echo $row['StudentID']; ?>"><?php echo $row['StName'] , " - ", $row['StudentID'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>

                    <label for="others">Others</label>
                    <div style="padding-bottom: 10px">
                        <select id="others" name="others" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                        <?php
                        foreach ($data as $row): ?>
                        <option value="<?php echo $row['StudentID']; ?>"><?php echo $row['StName'] , " - ", $row['StudentID'] ?></option>
                        <?php endforeach ?>
                        </select>
                    </div>

                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" required>

                    <label for="concentration">Concentration (ug/ul)</label>
                    <input type="float" id="concentration" name="concentration" required>

                    <label for="totalVolume">Total Volume (ul)</label>
                    <input type="float" id="totalVolume" name="totalVolume" required>

                    <label for="purity">A260/280 (Purity)</label>
                    <input type="text" id="purity" name="purity" required>

                    <label for="relatedTo">Related to Virus/Envelope Protein/Receptor</label>
                    <input type="text" id="relatedTo" name="relatedTo">

                    <label for="remarks">Remarks</label>
                    <textarea id="remarks" name="remarks" rows="4" cols="60"></textarea>

                    <label for="credit1">Credit 1</label>
                    <input type="text" id="credit1" name="credit1">

                    <label for="credit2">Credit 2</label>
                    <input type="text" id="credit2" name="credit2">

                    <label for="credit3">Credit 3</label>
                    <input type="text" id="credit3" name="credit3">

                    <label for="plasmidMap">Upload Plasmid Map</label>
                    <div style="padding-bottom: 10px">
                        <select id="plasmidMap" name="plasmidMap" style="width: 100%; padding: 8px; border-radius: 2cm; border: none;" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <!-- Add more input fields for other table columns -->

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

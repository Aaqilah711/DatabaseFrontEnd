<?php
include("fetchhh.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSR INDIVIDUAL PLASMID SHEET</title>
    <!-- Include Font Awesome stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body{
            background-color: #d9d9d9dd;
        }
        .table-container {
            overflow-x: auto; /* Enable horizontal scrolling */
            max-width: 100%; /* Ensure the container adjusts to screen width */
        }

        table {
            border-collapse: collapse;
            table-layout: fixed;
            width: 100%; /* Ensure table takes full width of container */
        }

        th, td {
            border: 1px solid #636262dd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #8e8a8a;
        }

        

        .search-container {
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .search-container label {
            margin-right: 10px;
        }

        .search-container input {
            padding: 8px;
        }

        .form-container-btn {
            background-color: #d41872;
            color: #fff;
            padding: 6px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-container-btn:hover {
            background-color: #a68ea9;
        }
        .cont{
            padding-bottom:5px;
            padding-left: 25px;
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
    <div class="a">
        <h1 style="color: #3f3f3f;">VSR INDIVIDUAL PLASMID SHEET</h1>
        <form action="vsrdel.php" method='POST'>
        <div class="search-container">
            <label for="del"><i class="fas fa-search"></i></label>
            <input type="text" id="del" name="del" placeholder="Enter VSR Plasmid no" required>
        </div>
        <div class="cont">
            <button class="form-container-btn" type="submit" name="submit" id="'submit">Delete</button>
        </div>
        </form>
    </div>
    <div class='table-container'>
    <table>
        <thead>
            <tr>
                <th style="width: 150px;">VSR Plasmid No</th>
                <th style="width: 150px;">Common or Specific</th>
                <th style="width: 150px;">Owner</th>
                <th style="width: 150px;">Owner Others</th>
                <th style="width: 300px;">Plasmid Description</th>
                <th style="width: 150px;">Confirmed by RD/Seq/IFA</th>
                <th style="width: 150px;">Antibiotic Selection Marker</th>
                <th style="width: 150px;">Plasmid Isolated by</th>
                <th style="width: 150px;">Others</th>
                <th style="width: 150px;">Date</th>
                <th style="width: 150px;">Concentration (ug/ul)</th>
                <th style="width: 150px;">Total Volume (ul)</th>
                <th style="width: 150px;">A260/280 (Purity)</th>
                <th style="width: 150px;">Related to Virus/Envelope Protein/Receptor</th>
                <th style="width: 300px;">Remarks</th>
                <th style="width: 150px;">Credit 1</th>
                <th style="width: 150px;">Credit 2</th>
                <th style="width: 150px;">Credit 3</th>
                <th style="width: 150px;">Upload Plasmid Map</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($fetchData as $data): ?>
            <tr>
                <td><?php echo $data['plasmid']['vsr_no'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['CommonPlasmid'] ?? ''; ?></td>
                <td><?php echo $data['obstudent']['StuName'] ?? ''; ?></td>
                <td><?php echo $data['obstudent']['ob_others'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['PlasmidDescription'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['ConfirmedBy'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['AntibSelectionMarker'] ?? ''; ?></td>
                <td><?php echo $data['ibstudent']['StuName'] ?? ''; ?></td>
                <td><?php echo $data['ibstudent']['ib_Others'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['PlasmidDate'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['Concentration'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['TotalVolume'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['Purity'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['RelatedTo'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['Remarks'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['Credit1'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['Credit2'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['Credit3'] ?? ''; ?></td>
                <td><?php echo $data['plasmid']['Upload'] ?? ''; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </tbody>
    </table>
    </div>

    <script src="scripts.js"></script>
</body>
</html>

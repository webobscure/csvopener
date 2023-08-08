<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>CSV</title>
</head>

<body>
  <div class="container">
    <?php

    
      // Open the CSV file
      $fcsv = fopen('offers.csv', 'r');
      // Get header row
      $row = fgetcsv($fcsv);
      // Output start of table & header row


    ?>
    <form action="" method="post" enctype="multipart/form-data">
      <button type="button" value="Read" class="button" name="submit" onclick="openCSV()">
        Загрузить файл  
    </button>


      <table id="table"  style="display: none;">
        <thead>
          <tr>
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td><?= $row[3] ?></td>
            <td><?= $row[4] ?></td>
            <td><?= $row[5] ?></td>
            <td><?= $row[6] ?></td>
            <td><?= $row[7] ?></td>
            <td><?= $row[8] ?></td>
            <td><?= $row[9] ?></td>
            <td><?= $row[10] ?></td>
            <td><?= $row[11] ?></td>
            <td><?= $row[12] ?></td>
            <td><?= $row[13] ?></td>
            <td><?= $row[14] ?></td>
            <td><?= $row[15] ?></td>
            <td><?= $row[16] ?></td>
            <td><?= $row[17] ?></td>
            <td><?= $row[18] ?></td>
            <td><?= $row[19] ?></td>
            <td><?= $row[20] ?></td>
            <td><?= $row[21] ?></td>

          </tr>
        </thead>
        <tbody>
          <?php
          // Loop through rest of rows in CSV
          while (($row = fgetcsv($fcsv)) !== false) {
          ?>
            <tr>
              <td><?= $row[0] ?></td>
              <td><?= $row[1] ?></td>
              <td><?= $row[2] ?></td>
              <td><?= $row[3] ?></td>
              <td><?= $row[4] ?></td>
              <td><?= $row[5] ?></td>
              <td><?= $row[6] ?></td>
              <td><?= $row[7] ?></td>
              <td><?= $row[8] ?></td>
              <td><?= $row[9] ?></td>
              <td><?= $row[10] ?></td>
              <td><?= $row[11] ?></td>
              <td><?= $row[12] ?></td>
              <td><?= $row[13] ?></td>
              <td><?= $row[14] ?></td>
              <td><?= $row[15] ?></td>
              <td><?= $row[16] ?></td>
              <td><?= $row[17] ?></td>
              <td><?= $row[18] ?></td>
              <td><?= $row[19] ?></td>
              <td><?= $row[20] ?></td>
              <td><?= $row[21] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <input type="button" class="button" value="close" id="close" onclick="closeCSV()" style="margin-top: 20px; display: none;">
    </form>

  </div>
</body>
<script src="index.js"></script>
</html>
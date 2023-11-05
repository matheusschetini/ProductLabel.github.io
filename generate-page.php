<?php

$productName = $_POST['product_name'];
$serialNumber = $_POST['serial_number'];
$calibrationDate = $_POST['calibration_date'];
$nextCalibrationDate = $_POST['next_calibration_date'];

// Create a new HTML file
$file = fopen('product-calibration-report.html', 'w');

// Write the page content to the file
fwrite($file, '<!DOCTYPE html>
<html>
<head>
  <title>Product Calibration Report</title>
</head>
<body>
  <h1>Product Calibration Report</h1>

  <table>
    <tr>
      <th>Product Name</th>
      <td>' . $productName . '</td>
    </tr>
    <tr>
      <th>Serial Number</th>
      <td>' . $serialNumber . '</td>
    </tr>
    <tr>
      <th>Calibration Date</th>
      <td>' . $calibrationDate . '</td>
    </tr>
    <tr>
      <th>Next Calibration Date</th>
      <td>' . $nextCalibrationDate . '</td>
    </tr>
  </table>
</body>
</html>');

// Close the file
fclose($file);

// Redirect the user to the new page
header('Location: product-calibration-report.html');

exit;

?>

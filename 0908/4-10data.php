<?php
$username = $_GET['username'] ?? '';
$search = $_GET['search'] ?? '';
$email = $_GET['email'] ?? '';
$email2 = $_GET['email2'] ?? '';
$url = $_GET['url'] ?? '';
$tel = $_GET['tel'] ?? '';
$number = $_GET['number'] ?? '';
$date = $_GET['date'] ?? '';
$time = $_GET['time'] ?? '';
$range = $_GET['range'] ?? '';
$color = $_GET['color'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div style="background-color: <?php print($color); ?>; width: 100px; height: 100px;"></div>
</body>
</html>
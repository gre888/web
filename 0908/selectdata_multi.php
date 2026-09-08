<?php
$county = isset($_GET['county']) ? $_GET['county'] : array();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      body {font-size: 1.2rem;}
  </style>
</head>
<body>
  <p>城市: <p></p>
  <?php
    if (isset($_GET['county']) && !empty($_GET['county'])) {
        foreach ($county as $c) {
            echo "城市編號: " . htmlspecialchars($c) . "<br>";
        }
    } else {
        echo "未選擇城市";
    }
  ?>

  
</body>
</html>
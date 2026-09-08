<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>城市: 
  <?php
    if (isset($_GET['county'])) {
        $county = $_GET['county'];
        switch ($county) {
            case '1':
                echo "台北市";
                break;
            case '2':
                echo "新北市";
                break;
            case '3':
                echo "桃園市";
                break;
            case '4':
                echo "台中市";
                break;
            case '5':
                echo "台南市";
                break;
            case '6':
                echo "高雄市";
                break;
            default:
                echo "未知城市";
        }
    } else {
        echo "未選擇城市";
    }
  ?>
  </p>
  
</body>
</html>
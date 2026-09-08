

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <p>生日</p>
    <?php
      if (isset($_GET['birthday'])) 
      {
          $birthday = $_GET['birthday'];
          if(empty($birthday)) 
          {
            print("您未輸入生日");
          } 
          
          else 
          {
            print($birthday);
          }
      }

    ?>

  </div>
  
</body>
</html>
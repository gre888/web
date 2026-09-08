
<?php
  if (isset($_GET['phone'])) 
    {$phones = $_GET['phone'];
    }
?>

<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <p>您選擇的手機</p>
    <?php 
    
      if (isset($phones)) 
      {
              foreach ($phones as $value) 
                        {
              print( $value."<br>");
          }
      }
      else
      { echo "<p>您未選擇任何手機</p>"; } 
      
    ?>
    
</body>
</html>
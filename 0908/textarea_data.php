<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <pre>
<?php
      if (isset($_GET['trouble'])) 
      {
          $trouble = $_GET['trouble'];
          if(empty($trouble)) 
          {
            print("您未輸入問題");
          } 
          else 
          {
            print($trouble);
            // altert彈出視窗印出訊息;alert只能單行 不能多行
            print("<script>alert('" . $trouble . "');</script>");

          }
      }
      else 
      {
        print("您未輸入任何欄位");
      }
?>
    </pre>
</body>
</html>
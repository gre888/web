<?php
  $userName = $_POST['userName'];
  $userPWD = $_POST['userPWD'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{font-size:1.2rem}
    table {
      border:5px solid #000;
      background-color: antiquewhite;
      width: 70%;
      margin:10px auto; /* 上下10px 左右置中 */
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    th, td {
      border: 3px solid #ddd;

    }
  </style>
</head>
<body>
  <div>
    <table>
      <tr>
        <th>帳號</th>
        <th>密碼</th>
      </tr>
      <tr>
        <td><?php print ($userName); ?></td>
        <td><?php print ($userPWD); ?></td>
      </tr>
    </table>
  </div>
</body>
</html>
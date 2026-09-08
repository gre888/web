<?php
    $userName = $_GET['userName'];
    $userPWD = $_GET['userPWD'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>讀取帳號密碼</title>
    <style>
      body {
        font-size: 1.7rem;
      }
      table {
        border:5px solid yellowgreen;
        color:blue;
        background-color:lightyellow;
        width: 70%;
        margin: 10px auto;  /*上下間距10像素，左右auto為置中對齊*/
      }
      tr {
        /* border:5px solid green; */ /*此設定無效*/
        /*以下設定有效*/
        /* color:rgb(29, 205, 184);
        background-color:rgb(230, 37, 163); */
      }
      tr:hover {
        color:rgb(97, 102, 233);
        background-color:rgb(246, 246, 240);
      }
      th, td {
        border: 3px solid green;
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
                <td><?php print($userName); ?></td><td><?php print($userPWD); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
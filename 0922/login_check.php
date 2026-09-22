<?php
    $username = isset($_GET['username']) ? $_GET['username'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';
    // $sql = "SELECT * FROM users WHERE username = 'abc' and password = 'abc'";
    // $sql = "SELECT username,password,login_time FROM users";
    $host = '127.0.0.1';            // 資料庫IP
    $username_db = 'perkin';        // 資料庫使用者名稱
    $password_db = 'mytest';        // 資料庫密碼
    $database = 'mydb';             // 資料庫名稱
    // 建立資料庫連線
    $conn = new mysqli($host, $username_db, $password_db, $database);
    // 準備SQL指令
    $sql = "SELECT * FROM users WHERE username = ? and password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) 
    {
        print("登入成功");
        $stmt->close();
        //寫入登入時間
        date_default_timezone_set('Asia/Taipei');
        $login_time = date('Y-m-d H:i:s');
        $sql_update = "UPDATE users SET login_time = ? WHERE username = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ss", $login_time, $_POST['username']);
        $stmt_update->execute();    // 更新登入時間
        $stmt_update->close();      // 關閉更新
    } 
    else 
    {
        // 登入失敗，導向回首頁
        header('Location: index.php');
        $stmt->close();
        $conn->close();
	    exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <?php
        $sql = "SELECT username,password,login_time FROM users";
    ?>
    <div>
        <table>
            <tr>
                <th>帳號</th>
                <th>密碼</th>
                <th>登入時間</th>
            </tr>
            <?php
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                    //<方法一> 使用 fetch_assoc() 取得關聯陣列
                    // while($row = $result->fetch_assoc()) 
                    // {
                    //     print("<tr>");
                    //     print("<td>" . $row['username'] . "</td>");
                    //     print("<td>" . $row['password'] . "</td>");
                    //     print("<td>" . $row['login_time'] . "</td>");
                    //     print("</tr>");
                    // }
                    //<方法二> 使用 fetch_row() 取得索引陣列
                    while($row = $result->fetch_row()) 
                    {
                        print("<tr>");
                        print("<td>" . $row[0] . "</td>");
                        print("<td>" . $row[1] . "</td>");
                        print("<td>" . $row[2] . "</td>");
                        print("</tr>");
                    }
                }
                $conn->close();
            ?>
        </table>
    </div>
</body>
</html>
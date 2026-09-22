<?php
    if (!isset($_FILES['myfile'])) 
    {
        die("錯誤:沒有選擇檔案");
    }

    //設定上傳目錄
    $uploadDir = 'uploads/';
    /*
    注意﹔現在新版的瀏覽器為了安全性，可能不會傳送完整的檔案路徑，只會傳送檔名
    (所以以下兩行會印出同樣只有檔名的訊息，可以考慮不需要使用basename將本地端的檔案路徑剝離)
    print($_FILES['myfile']['name']."<br>");
    print(basename($_FILES['myfile']['name']));
    設定伺服器端的檔案上傳完整路徑(以原檔名存檔)
    注意﹔上傳檔案大小受php.ini以下兩個設定的影響：
    post_max_size=400M            //所有檔案的合計總體大小
    upload_max_filesize=40M       //單一檔案的最大上傳大小
    */
    //成功上傳的檔案數量
    $successCount = 0;
    //<方法一>取得上傳的檔案
    foreach($_FILES['myfile']['name'] as $key => $name)
    {
        $uploadFile = $uploadDir . basename($name);
        if (move_uploaded_file($_FILES['myfile']['tmp_name'][$key], $uploadFile)) 
        {
            print("檔案上傳成功: " . $uploadFile . "<br>");
            $successCount++;
        } 
        else 
        {
            print("檔案上傳失敗: " . $name . "<br>");
        }
    }
    //<方法二>取得上傳的檔案
    // $files = $_FILES['myfile'];
    // //計算上傳的檔案數量
    // $fileCount = count($files['name']);
    // for ($i = 0; $i < $fileCount; $i++) 
    // {
    //     //處理每一個上傳的檔案，並嘗試將其移動到指定的上傳目錄
    //     $uploadFile = $uploadDir . basename($files['name'][$i]);
    //     if (move_uploaded_file($files['tmp_name'][$i], $uploadFile)) 
    //     {
    //         print("檔案上傳成功: " . $uploadFile . "<br>");
    //         $successCount++;
    //     } 
    //     else 
    //     {
    //         print("檔案上傳失敗: " . $files['name'][$i] . "<br>");
    //     }
    // }
    
    print("成功上傳 " . $successCount . " 個檔案。<br>");
?>
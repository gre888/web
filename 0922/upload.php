<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //檢查是否有檔案上傳且沒有錯誤
    if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] === UPLOAD_ERR_OK) 
    {
        //設定上傳目錄
        $uploadDir = 'uploads/';
        /*
        注意﹔現在新版的瀏覽器為了安全性，可能不會傳送完整的檔案路徑，只會傳送檔名
        (所以以下兩行會印出同樣只有檔名的訊息，可以考慮不需要使用basename將本地端的檔案路徑剝離)
        print($_FILES['myfile']['name']."<br>");
        print(basename($_FILES['myfile']['name']));
        設定伺服器端的檔案上傳完整路徑(以原檔名存檔)
        注意﹔上傳檔案大小受php.ini以下兩個設定的影響：
        post_max_size=40M             //所有檔案的合計總體大小
        upload_max_filesize=40M       //單一檔案的最大上傳大小
        */
        $uploadFile = $uploadDir . basename($_FILES['myfile']['name']);
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadFile)) 
        {
            print("檔案上傳成功: " . $uploadFile);
        } 
        else 
        {
            print("檔案上傳失敗");
        }
    } 
    else
    {
        echo "沒有選擇檔案或上傳錯誤";
    }
// }
?>
<?php
    header('Content-Type: text/html; charset=utf-8');
    include("mysql.inc.php");
    //如果以 POST 方式傳遞過來的 id, qty 參數都不是空字串
    if ( !empty($_POST['id']) && !empty(['phone']) && !empty(['bossnum']) ){
        //更新 id 參數所指定編號的記錄
        $sql="UPDATE employee
        SET 電話 = '{$_POST['phone']}', 主管編號 = '{$_POST['bossnum']}'
        WHERE 員工編號 = '{$_POST['id']}' ";

        mysqli_query($conn, $sql);
    }
    //取得被更新的記錄筆數
    $rowUpdated=mysqli_affected_rows($conn);
    //如果更新的筆數大於 0, 則顯示成功, 若否, 便顯示失敗
    if ($rowUpdated >0){
        echo "資料更新成功";
    }
    else {
        echo "更新失敗, 或者您輸入的資料與原本相同";
    }
?>
<p><a href="empList.php">回系統首頁</a></p>
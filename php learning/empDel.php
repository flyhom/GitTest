<?php
    header( 'Content-Type: text/html; charset=utf-8' );
    include("mysql.inc.php");
    //如果以 GET 方式傳遞過來的 del 參數不是空字串
    if ( !empty($_GET['del']) ){
    //將 del 參數所指定的編號的記錄刪除
        $sql="DELETE FROM employee WHERE 員工編號 = '{$_GET['del']}' ";
        mysqli_query($conn, $sql);
        //取得被刪除的記錄筆數
        $rowDeleted = mysqli_affected_rows($conn);
        //如果刪除的筆數大於 0, 則顯示成功, 若否, 便顯示失敗
        if ( $rowDeleted >0 ){
            echo "刪除成功";
        }
        else {
            echo "刪除失敗";
        }
        echo '<br>';
        echo '<a href="empList.php">回系統首頁</a>';
    }
?>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');
    
    $number_order = $_GET['number_order'];
    
    //проверка на не ноль и на то что они есть
    $db = dbconnection();

    $sql = "DELETE FROM orders WHERE number_order = '$number_order'";
    $res = mysqli_query($db, $sql);
    if($res)
    {
        mysqli_close($db);
        return_ok('заказ удален))!!', 200);
    }
    else
    {
        mysqli_close($db);
        return_error("не получилось удалить заказ((", 400);
    }  
?>
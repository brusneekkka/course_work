<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');
    
    $id = $_GET['id'];
    //проверка на не ноль и на то что они есть
    $db = dbconnection();
    $sql = "DELETE FROM menu WHERE id = '$id'";
    $res = mysqli_query($db, $sql);
    if($res)
    {
        mysqli_close($db);
        return_ok('все прекрасно', 200);
    }
    else
    {
        mysqli_close($db);
        return_error("товар не добавлен в меню", 400);
    }  
?>
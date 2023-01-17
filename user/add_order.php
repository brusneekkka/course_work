<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');
    
    $name = $_GET['name'];
    $db = dbconnection();
    $sql = "INSERT INTO orderss (name) VALUES ('$name')";
        $res = mysqli_query($db, $sql);
    if($res)
    {
        mysqli_close($db);
        return_ok('заказ оформлен!!', 200);
    }
    else
    {
        mysqli_close($db);
        return_error("не получилось оформить заказ((", 400);
    }  
?>

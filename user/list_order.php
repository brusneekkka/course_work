<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');

    $name = $_GET['name'];

    $db = dbconnection();
    $sql = "SELECT * FROM orderss WHERE name = '$name'";
    $res = mysqli_query($db, $sql);
    if(!$res)
    {
        mysqli_close($db);
        return_error("заказ не найден((", 400);
    }
    else
    {
        $array = array();
        foreach ($res as $row) {
            array_push($array, $row['number_order']);
        }
        mysqli_close($db);
        return_ok($array,200);
    }  
?>
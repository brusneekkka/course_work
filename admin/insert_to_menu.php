<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');
    
    $type = $_GET['type'];
    $img = $_GET['img'];
    $descr = $_GET['descr'];
    $price = $_GET['price'];
    //проверка на не ноль и на то что они есть
    $db = dbconnection();
    $sql = "INSERT INTO menu (type, img, descr, price) VALUES ('$type','$img','$descr','$price')";
    $res = mysqli_query($db, $sql);
    if($res)
    {
        $array = array('type'=>$type, 'img'=>$img, 'descr'=>$descr, 'price'=>$price, 'id'=>mysqli_insert_id($db));
        mysqli_close($db);
        return_ok($array, 200);
    }
    else
    {
        mysqli_close($db);
        return_error("товар не добавлен в меню", 400);
    }  
?>
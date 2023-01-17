<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');
    
    $name = $_GET['name'];
    //$number_order = $_GET['number_order'];
    //$numbers_products = $_GET['numbers_products'];
    //проверка на не ноль и на то что они есть
    $db = dbconnection();
    /*foreach ($numbers_products as $number_product) {
        echo $number_product;
        $sql = "INSERT INTO orders (name, number_order, number_product) VALUES ('$name','$number_order','$number_product')";
        $res = mysqli_query($db, $sql);
    }
    */
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
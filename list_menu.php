<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');

    $db = dbconnection();
    $sql = "SELECT * FROM menu";
    $res = mysqli_query($db, $sql);
    if(!$res)
    {
        mysqli_close($db);
        return_error("товары не найдены", 400);
    }
    else
    {
        $array = array();
        foreach ($res as $row) {
            $item = array('type'=>$row['type'], 'img'=>$row['img'], 'descr'=>$row['descr'], 'price'=>$row['price'], 'id'=>$row['id']);
            array_push($array, $item);
        }
        mysqli_close($db);
        return_ok($array,200);
    }  
?>
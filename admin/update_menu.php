<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'\course_work\json_encode.php');
    
    $column = $_GET['column'];
    $value = $_GET['value'];
    $id = $_GET['id'];
    
    switch ($column) {
        case 'type':
            $sql = "UPDATE menu SET type = '$value' WHERE id = '$id'";
            break;
        case 'img':
            $sql = "UPDATE menu SET img = '$value' WHERE id = '$id'";
            break;
        case 'descr':
            $sql = "UPDATE menu SET descr = '$value' WHERE id = '$id'";
            break;
        case 'price':
            $sql = "UPDATE menu SET price = '$value' WHERE id = '$id'";
            break;        
        default:
            return_error("такого столбца не найдено", 400);
            break;
    }
    $db = dbconnection();
    $res = mysqli_query($db, $sql);
    if($res)
    {
        return_ok('все супер', 200);
    }
    else
    {
        mysqli_close($db);
        return_error("товар не добавлен в меню", 400);
    }  
?>

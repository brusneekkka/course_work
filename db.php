<?php
    function dbconnection(){
        $db = mysqli_connect ("localhost","root","root","kiosk");
        if (!$db){
            echo 'error die';
        }
        return $db;
    }
?>
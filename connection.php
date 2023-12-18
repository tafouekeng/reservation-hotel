<?php
try {
    //code...
    $str="mysql:host=localhost;hotel.php";
    $pdo=new PDO($str,'root','');
} catch (PDOException $e) {
    //throw $th;
    $msg = 'erreur PDO'.$e->getMessage();
    die($msg);
}
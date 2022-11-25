<?php

class db
{
public static function dbConnection(){
    $db=mysqli_connect('localhost','root','root','shop');
    return $db;
}
}
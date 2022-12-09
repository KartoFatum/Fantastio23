<?php
foreach ($_POST as $key=>$item){
    $button=$key;
}


$db=db::dbConnection();
$result=$db->query("select * from categories where price='$button' ")->fetch_all(1);

require_once ("output.php");
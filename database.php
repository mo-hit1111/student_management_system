<?php
$mysql = new mysqli("localhost","root","","management_system");
if($mysql->connect_error){
    die('database not connected');
}
?>
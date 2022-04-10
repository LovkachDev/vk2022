<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    require "rb-mysql.php";
    R::setup('mysql:host=localhost;dbname=vk2022', 'root', 'root'); 
    session_start();
?>
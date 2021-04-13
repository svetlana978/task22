<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = 'localhost';
$user_enter = 'root';
$password_enter = '';
$dbName = 'test';

$link = mysqli_connect($host, $user_enter, $password_enter, $dbName)
    or die(mysqli_error($link));

mysqli_query($link, "SET NAMES 'utf8'");

$result = mysqli_query($link, "SELECT name, login FROM users") or die(mysqli_error($link));
for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    var_dump($data);
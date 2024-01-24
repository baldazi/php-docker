<?php
 
 const DB_HOST = 'db';
 const DB_PASS = 'pass';
 const DB_USER = 'test';
 const DB_NAME = 'demo';

 $dsn = "mysql:host=".DB_HOST."; dbname=".DB_NAME;

 try{
    $con = new PDO($dsn, DB_USER, DB_PASS);
    echo "success";
 }catch (PDOException $e){
    echo "error : ".$e->getMessage();
    die;
 }
<?php
    try{
        $dbh=new PDO('mysql:host=localhost; dbname=kursova_db',"root","234565Aa");
    } catch (\Exception $exception){
        echo "Помилка при підключенні до БД.<br>";
        echo $exception->getMessage();
        die();
    }

?>
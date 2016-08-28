<?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=find-film",'root','');
    }catch(PDOException $e){
        echo  $e->getMessage();
    }
?>
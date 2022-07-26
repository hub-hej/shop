<?php

    try{
        $dsn = 'mysql:host=localhost;port=3307;dbname=testowa';
        $dbuser = 'root';
        $dbpass = '';
        
        $params = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        
        $pdo = new PDO($dsn, $dbuser, $dbpass, $params);
    
    }catch(PDOException $e) {
        echo $e;
    }
?>
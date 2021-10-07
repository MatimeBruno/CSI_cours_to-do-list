<?php
    try
    {
        $conn = new PDO("mysql:host=$servername;dbname=$bddName", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connexion établi";
    }
    catch(PDOException $e)
    {
        //echo "Echec de connexion à la base de données : " . $e->getMessage();
    }
?>
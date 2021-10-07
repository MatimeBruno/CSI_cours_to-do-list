<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $toDoValue = $_POST["task"];
        $dataCleaned = strip_tags($toDoValue);// retire les caractères html
        $dataCleaned = stripslashes($dataCleaned);// retire les anti-slash

        // requête préparée et association des paramètres
        $sql_request = $conn->prepare("INSERT INTO toDoList_list (toDo) VALUES (:toDoValue)");
        $sql_request->bindParam(':toDoValue', $dataCleaned);

        // Insertion d'une ligne
        try
        {
            $sql_request->execute();
        }
        catch (PDOException $e)
        {
            //echo "Erreur impossible d'ajouter : " . $e->getMessage();
        }
    }
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // requête préparée et association des paramètres
        $sql_request = $conn->prepare("SELECT toDo FROM toDoList_list");

        // Récupération des tâches
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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>To-do-list</h1>
    <ul>
        <?php
            $taskArray = array("Faire les courses", "Faire le ménage", "Faire du sport");
            foreach($taskArray as $taskValue)
            {
                echo '<li>'.$taskValue.'</li>';
            }
        ?>
    </ul>
</body>
</html>
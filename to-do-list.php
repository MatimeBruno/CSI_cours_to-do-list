<?php
	require "./config/bddCredentials.php";
	require "./config/bddConn.php";
	require "./CRUD/create.php";
	require "./CRUD/read.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Css bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
	<h1 class="text-success text-center mb-3 mt-3">&#9989; To-do-list</h1>

	<form action="" method="post">
		<div class="input-group mb-3 mt-5">
			<input type="text" name="task" class="form-control" placeholder="Ajouter une tâche ...">
			<div class="input-group-append">
				<button class="btn btn-success" type="submit">Ajouter</button>
			</div>
		</div>
	</form>

	<div class="mt-5">
		
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
			<label class="custom-control-label" for="customCheck">Check this custom checkbox</label>
		</div>
	</div>

</body>
</html>
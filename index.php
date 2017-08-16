<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Questionnaire Nomophobie by Gabriele</title>

	<!--css links-->
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/lib/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<!--css links ends-->

</head>
<body>
	<header class="container">
		<div class="col-md-7 col-md-offset-3">
			<h1 class="title-qcm">Questionnaire: Es-tu nomophobe ?</h1>
		</div>
	</header>
	<article class="container">
		<form action="assets/php/correction.php" method="POST">
			<!--Ceci va être dans le fichier gérérateur de question php--> 
			<div class="row">
				<h2 class="question-title col-md-4 col-md-offset-4"></h2>
				<ul class="text-on-circles">
					<li class="pas-d-accord"></li>
					<li class="d-accord"></li>
				</ul>
				<ul class="list-inline">
					<li class="circles"></li>
					<li class="circles"></li>
					<li class="circles"></li>
					<li class="circles"></li>
					<li class="circles"></li>
					<li class="circles"></li>
					<li class="circles"></li>
				</ul>
			</div>
			<input type="submit" value="Vérifier votre résultat !" class="btn col-md-offset-4 col-md-4">
		</form>
	</article>
</body>
</html>

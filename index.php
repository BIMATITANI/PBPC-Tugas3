<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>Hello, world!</title>
	</head>
	<body>
	
	<style>
		html, body {
			background-color: white;
			background-image: url("1_CikVjfoDbQG_xP24g72-3w.jpeg");
			color: white;
			text-align: center;
		}

		.animasi {
			animation-name: bodyanim;
			animation-duration: 1s;
		}

		@keyframes bodyanim {
			from {
				transform: translate(-500px, 0px);
				opacity: 0;
			}
			to {
				transform: translate(0px, 0px);
				opacity: 1;
			}
		}
		
		
		
	</style>

<?php

session_start();

if (!isset($_SESSION['jeneng'])) {
	header("location:login.php");
	exit;
}


echo '
		<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCol" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navCol">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">List Data</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">List Matakuliah</a>
					</li>
				</ul>
				<ul class="navbar-nav">	
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<h2 class="animasi" >Welcome '.$_SESSION['jeneng'].'</h2>
		</div>
		
		
		
		

';



?>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
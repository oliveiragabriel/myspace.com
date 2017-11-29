<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/site.css"/>
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
	</head>
	<body>
		<div class="log">
			<h1 class="title">MySpace</h1>
			<form action="home.php" method="post">
				<input type="text" placeholder="Nome de usuário" name="username" class="box"/></br></br>
				<input type="password" placeholder="Senha" name="senha" class="box"/></br></br>
				<a href="home.php"><input type="submit" value="Entrar" id="entrar"/></a>
			</form><br>
			<button id="cadastro"><a href="cadastrar.php">Cadastrar-se</a></button>
		</div>
	</body>
</html>
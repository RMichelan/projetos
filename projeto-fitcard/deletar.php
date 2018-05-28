<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>C R U [D]</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>

</head>
<body>

	<div class="container container-titulo">
		<h1>DELETAR ESTABELECIMENTO DO BANCO</h1>
	</div>

	<div class="container container-form form-area">

		<form action="php/delete.php" method="POST">

			<div class="form-row form-group">
				<div class="col">
					<input type="text" class="form-control" name="id" id="id" placeholder="Insira o # do estabelecimento que será deletado">
				</div>
				<div class="col">
					<button type="submit" class="btn btn-primary btn-block">Deletar</button>
				</div>
			</div>

		</form>
	</div>

	<div id="botoes">
		<ul>
			<li><a href="cadastrar.php" id="btn-verde">CADASTRAR</a></li>
			<li><a href="php/read.php" id="btn-azul">CONSULTAR</a></li>
			<li><a href="atualizar.php" id="btn-amarelo">ALTERAR</a></li>
		</ul>
	</div>


</body>
</html>
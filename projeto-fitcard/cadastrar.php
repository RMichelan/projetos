<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>[C] R U D</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>
	<script type="text/javascript">
		var categoria = getElementById('categoria');
		var telefone = getElementById('telefone');

		if (categoria.value == 'supermercado') {
			telefone.attr('required', true);
		}
	</script>	

</head>
<body>

	<div class="container container-titulo">
		<h1>CADASTRAR NOVO ESTABELECIMENTO</h1>
	</div>

	<div class="container container-form form-area">

		<form action="php/create.php" method="POST">

			<div class="form-group">
				<input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="Razão Social*" required>
			</div>

			<div class="form-row form-group">
				<div class="col">
					<input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia" placeholder="Nome Fantasia">
				</div>
				<div class="col">
					<input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="CNPJ*" onkeydown="javascript: fMasc( this, mCNPJ );" maxlength="18" required>
				</div>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
			</div>	

			<div class="form-row form-group" >
				<div class="col">
					<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
				</div>
				<div class="col">
					<input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
				</div>
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" onkeydown="javascript: fMasc( this, mTel );" maxlength="13">
			</div>

			<div class="form-group">
				<select class="form-control" name="categoria" id="categoria">
					<option name="supermercado" id="supermercado">Supermercado</option>
					<option name="restaurante" id="restaurante">Restaurante</option>
					<option name="borracharia" id="borracharia">Borracharia</option>
					<option name="posto" id="posto">Posto</option>
					<option name="oficina" id="oficina">Oficina</option>
				</select>
			</div>

			<div class="form-row form-group">
				<div class="col">
					<input type="text" class="form-control" name="agencia" id="agencia" placeholder="Agência" onkeydown="javascript: fMasc( this, mAgencia );" maxlength="5">
				</div>
				<div class="col">
					<input type="text" class="form-control" name="conta" id="conta" placeholder="Conta" onkeydown="javascript: fMasc( this, mConta);" maxlength="8">
				</div>
			</div>

			<button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>

		</form>
	</div>

	<div id="botoes">
		<ul>
			<li><a href="php/read.php" id="btn-azul">CONSULTAR</a></li>
			<li><a href="atualizar.php" id="btn-amarelo">ALTERAR</a></li>
			<li><a href="deletar" id="btn-vermelho">DELETAR</a></li>
		</ul>
	</div>


</body>
</html>
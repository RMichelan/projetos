<?php 

include_once "conect.php";

$stmt = $conn->prepare("SELECT * FROM estabelecimento ORDER BY id");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>C [R] U D</title>

	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" href="../css/style.css">

 </head>
 <body>
 	<div class="container-titulo">
 		<h1>DADOS CADASTRADOS NO BANCO</h1>
 	</div>
 	<div class="container-fluid table-striped table-bordered table-dark container-table">
	 	<table class="table">
	 		<thead>
	 			<th><span>#</span></th>
	 			<th><span>Razão Social</span></th>
	 			<th><span>Nome Fantasia</span></th>
	 			<th><span>CNPJ</span></th>
				<th><span>E-mail</span></th>
				<th><span>Endereço</span></th>
				<th><span>Cidade</span></th>
				<th><span>Estado</span></th>
				<th><span>Telefone</span></th>
				<th><span>Data de Cadastro</span></th>
				<th><span>Categoria</span></th>
				<th><span>Agência</span></th>
				<th><span>Conta</span></th>
	 		</thead>
			<tbody>
	 			<?php foreach ($results as $row) {
					echo "<tr>";
					foreach ($row as $key => $value) {
						if ($key != 'status') {
							echo '<td><p>' . $value . '</p></td>';
							if ($key == 'id') {
								$id = $key;
							}
						}	
					}
					echo "</tr>";
				}?>
			</tbody>
	 	</table>
 	</div>

	<div id="botoes">
		<ul>			
			<li><a href="../cadastrar.php" id="btn-verde">CADASTRAR</a></li>
			<li><a href="../atualizar.php" id="btn-amarelo">ALTERAR</a></li>
			<li><a href="../deletar" id="btn-vermelho">DELETAR</a></li>
		</ul>
	</div>
</body>
 </body>
 </html>
<?php 

include_once "conect.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$razao_social = filter_input(INPUT_POST, 'razao_social', FILTER_SANITIZE_STRING);
$nome_fantasia = filter_input(INPUT_POST, 'nome_fantasia', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$data_cadastro = strtotime("now");
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$status = true;
$agencia = filter_input(INPUT_POST, 'agencia', FILTER_SANITIZE_STRING);
$conta = filter_input(INPUT_POST, 'conta', FILTER_SANITIZE_STRING);


$stmt = $conn->prepare("UPDATE estabelecimento SET razao_social = :RAZAO_SOCIAL, nome_fantasia = :NOME_FANTASIA, 
													cnpj = :CNPJ, email = :EMAIL, endereco = :ENDERECO, 
													cidade = :CIDADE, estado = :ESTADO, telefone = :TELEFONE, 
													data_cadastro = :DATA_CADASTRO, categoria = :CATEGORIA, 
													status = :STATUS, agencia = :AGENCIA, conta = :CONTA	WHERE id = :ID");

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":RAZAO_SOCIAL", $razao_social);
$stmt->bindParam(":NOME_FANTASIA", $nome_fantasia);
$stmt->bindParam(":CNPJ", $cnpj);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":ENDERECO", $endereco);
$stmt->bindParam(":CIDADE", $cidade);
$stmt->bindParam(":ESTADO", $estado);
$stmt->bindParam(":TELEFONE", $telefone);
$stmt->bindParam(":DATA_CADASTRO", $data_cadastro);
$stmt->bindParam(":CATEGORIA", $categoria);
$stmt->bindParam(":STATUS", $status);
$stmt->bindParam(":AGENCIA", $agencia);
$stmt->bindParam(":CONTA", $conta);

$stmt->execute();

header("Location: ../atualizar.php");
echo "Estabelecimento ATUALIZADO com sucesso!!";

 ?>
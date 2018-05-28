<?php 

include_once "conect.php";

$conn->beginTransaction();

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

$stmt = $conn->prepare("DELETE FROM estabelecimento WHERE id = :ID");

$stmt->bindParam(":ID", $id);

$stmt->execute();

header("Location: ../deletar.php");
echo "Estabelecimento DELETADO com sucesso!!";

 ?>

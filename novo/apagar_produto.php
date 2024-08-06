<?php
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

require("conexao.php");

$sql="DELETE FROM produtos WHERE id = ?";
try{
    $stmt = $conn->prepare($sql);
    $resultado = $stmt->execute([$id]);
    echo("Produto removido. " . $resultado);
}
catch(PDOException $e){
    echo("Erro ao excluir produto: " . $e.getMessage());
}

header("Location: /novo/index.php");

?>
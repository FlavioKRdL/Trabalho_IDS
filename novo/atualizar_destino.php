<?php
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT);

require("conexao.php");

$sql = "UPDATE produtos SET nome=?, descricao=?, preco=? WHERE id=?";

try{
    $stmt = $conn->prepare($sql);
    $resultado = $stmt->execute([$nome, $descricao, $preco, $id]);
}
catch(Exceptio $e){
    $resultado = false;
    $erro = $e->getMessage();
}

if($resultado == true){
    ?>
    <div>
        <h4>Dados atualizados com sucesso!</h4>
    </div>
    <?php 
    
}
else{
    ?>
    <div>
        <h4>Erro ao efetuar atualização!</h4>
    </div>
    <?php
}

header("Location: /novo/index.php");

?>
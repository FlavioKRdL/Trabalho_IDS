<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require("header.html"); 

    require("conexao.php");
    
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

    $sql = "SELECT id, nome, descricao, preco FROM produtos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    ?>

    <br>

    <div style="text-align: center;"><h2>Atualize o produto</h2></div>

    <section class="corpo">
        <div class="formulario">

            <form action="atualizar_destino.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo($row["id"]);?>">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" value="<?php echo($row["nome"]);?>">
        
                <br><br>
        
                <label for="descricao">Descrição: </label>
                <input name="descricao" id="descricao" value="<?php echo($row["descricao"]); ?>">
        
                <br><br>
        
                <label for="preco">Preço: </label>
                <input type="number" name="preco" id="preco" step="0.01" size="5vw" 
                value="<?php echo($row["preco"]); ?>">
        
                <br><br>
                <div style="text-align: center;">
                    <input type="submit" value="Criar">
                </div>
            </form>
            
        </div>
    </section>

</body>
</html>
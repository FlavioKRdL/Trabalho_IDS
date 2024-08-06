<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require("header.html"); ?>

    <br>

    <div style="text-align: center;"><h2>Adicione um produto</h2></div>

    <section class="corpo">
        <div class="formulario">

            <form action="criar_destino.php" method="post">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
        
                <br><br>
        
                <label for="descricao">Descrição: </label>
                <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
        
                <br><br>
        
                <label for="preco">Preço: </label>
                <input type="number" name="preco" id="preco" step="0.01" size="5vw">
        
                <br><br>
                <div style="text-align: center;">
                    <input type="submit" value="Criar">
                </div>
            </form>
            
        </div>
    </section>
</body>
</html>
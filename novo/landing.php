<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include("header.html"); 
    
    ?>

    <section class="body1">
        <div style="display: flex; justify-content: space-between;">
            <div class="h3Produtos">
                <h3>Produtos</h3>
            </div>
            <div class="addLink">
                <a href="criar_produto.php">Adicionar produto</a>
            </div>
        </div>

        <?php
        require "conexao.php";
            $sql = "select * from produtos order by id";

        try{
            $stmt = $conn->query($sql);
        }
        catch(PDOException $e){
            $resultado = false;
            $erro = $e->getMessage();
        }
        ?>

        <table class="table1">
            
            <tr class="trhead1">
                <th class="thead">ID</th>
                <th class="thead">Nome</th>
                <th class="thead">Descrição</th>
                <th class="thead">Preço</th>
                <th class="thead theadAtualizar">Atualizar</th>
                <th class="thead theadApagar">Deletar</th>
            </tr>

            <?php

            if($stmt == false){
                ?> 
                <div>
                    <p>Não há nenhum registro na tabela Produtos</p>
                </div>
                <div>
                    <p><?php echo($erro) ?></p>
                </div>
                <?php
            }
            else{
                
                while($row = $stmt->fetch()){
                ?>
                <?php?>
                <tr>
                    <th class="thead"><?=$row['id'];?></th>
                    <th class="thead"><?=$row["nome"];?></th>
                    <th class="thead"><?=$row["descricao"];?></th>
                    <th class="thead"><?=$row["preco"];?></th>
                    <th class="thead theadAtualizar">
                        <a href="atualizar_produto.php?id=<?=$row["id"];?>">Alterar</a>
                    </th>
                    <th class="thead theadApagar">
                        <a 
                            href="apagar_produto.php?id=<?=$row["id"];?>"
                            onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                            Apagar
                        </a>
                    </th>
                </tr>
                
                <?php
                }
            }
            ?>
        </table>
    </section>

</body>
</html>
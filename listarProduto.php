<?php
require_once('header.php');
include_once "database.php";

$selectSql = "SELECT id_produto, nome_produto, marca_produto, categoria_produto, valor_produto, quantidade_produto FROM sole_haven_produto";
$selectConnect = mysqli_query($conexao, $selectSql);
?>

    <main>
        <div class="container mt-3">
            <h1>Lista de produtos</h1>
        </div>
        <table class="table table-striped">
            <thead>
                <th>Nome produto</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Atualizar</th>
                <th>Excluir</th>
            </thead>
            <tbody>
                <?php
                while($dados = mysqli_fetch_array($selectConnect)){
                ?>
                <tr>
                    <td><?php echo $dados['nome_produto']?></td>
                    <td><?php echo $dados['marca_produto']?></td>
                    <td><?php echo $dados['categoria_produto']?></td>
                    <td><?php echo $dados['valor_produto']?></td>
                    <td><?php echo $dados['quantidade_produto']?></td>
                    <td><a href="formAtualizarCadastro.php?id_produto=<?php echo $dados['id_produto']?>">Atualizar</a></td>
                    <td><a href="#">Excluir</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>



<?php
require_once('footer.php');
?>
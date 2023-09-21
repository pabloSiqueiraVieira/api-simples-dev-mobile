<?php
require_once ("header.php");
?>

<main>
    <div class="container mt-3">
        <h1>Cadastro de produtos</h1>
        <form action="cadastrarProduto.php" method="post">
            <div class="mb-3 mt-3">
                <label for="nomeProduto" class="form-label">Nome:</label>
                <input type="text" name="nomeProduto" id="nomeProduto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição:</label>
                <input type="text" name="descricaoProduto" id="descricaoProduto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="marcaProduto" class="form-label">Marca:</label>
                <input type="text" name="marcaProduto" id="marcaProduto" class="form-control">
            </div>
            
            <div class="mb-3">
                <label for="categoriaProduto" class="form-label">Categoria:</label>
                <input type="text" name="categoriaProduto" id="categoriaProduto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="estiloProduto" class="form-label">Estilo:</label>
                <input type="text" name="estiloProduto" id="estiloProduto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="corProduto" class="form-label">Cor:</label>
                <input type="text" name="corProduto" id="corProduto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="valorProduto" class="form-label">Valor:</label>
                <input type="text" name="valorProduto" id="valorProduto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="quantidadeProduto" class="form-label">Quantidade:</label>
                <input type="number" name="quantidadeProduto" id="quantidadeProduto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="dataFabricacaoProduto" class="form-label">Data de Fabricação:</label>
                <input type="date" name="dataFabricacaoProduto" id="dataFabricacaoProduto" class="form-control">
            </div>
            <input type="submit" value="Cadastrar Produto" class="btn btn-primary">
        </form>
    </div>
</main>

<?php 
require_once ("footer.php");
?>
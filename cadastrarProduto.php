<?php
include_once ("database.php");
$nomeProduto = $_POST["nomeProduto"];
$descricaoProduto = $_POST["descricaoProduto"];
$marcaProduto = $_POST["marcaProduto"];
$categoriaProduto = $_POST["categoriaProduto"];
$estiloProduto = $_POST["estiloProduto"];
$corProduto = $_POST["corProduto"];
$valorProduto = $_POST["valorProduto"];
$quantidadeProduto = $_POST["quantidadeProduto"];
$dataFabricacaoProduto = $_POST["dataFabricacaoProduto"];

$sql = "INSERT INTO sole_haven_produto 
(nome_produto, descricao_produto, marca_produto, categoria_produto, estilo_produto, cor_produto, valor_produto, quantidade_produto, data_fabricação_produto) 
VALUES ('$nomeProduto', '$descricaoProduto', '$marcaProduto', '$categoriaProduto', '$estiloProduto', '$corProduto', '$valorProduto', '$quantidadeProduto', '$dataFabricacaoProduto')";

if (mysqli_query($conexao, $sql)){
    header("Location: listarProduto.php");
 }else{
    echo "Falha ao cadastrar produto";
 }



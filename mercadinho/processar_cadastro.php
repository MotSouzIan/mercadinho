<?php
include 'db.php'; // Inclui a conexão

// Coleta os dados do formulário
$nome_produto = $_POST['nome_produto'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];
$codigo_produto = $_POST['codigo_produto'];
$nome_fornecedor = $_POST['nome_fornecedor'];

// Prepara e executa a inserção
$sql = "INSERT INTO cadastro_produto (nome_produto, preco_compra, preco_venda, codigo_produto, nome_fornecedor)
VALUES ('$nome_produto', '$preco_compra', '$preco_venda', '$codigo_produto', '$nome_fornecedor')";

if ($conn->query($sql) === TRUE) {
    echo "Novo produto cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>

<!-- Botão para voltar ao formulário -->
<form action="index.php" method="get">
    <input type="submit" value="Voltar ao Cadastro">
</form>

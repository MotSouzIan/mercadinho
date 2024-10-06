<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-top: 10px;
    color: #666; 
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    box-sizing: border-box;
    border: 1px solid #ced4da; 
    border-radius: 4px; 
}

input[type="submit"] {
    margin-top: 20px;
    background-color: #4CAF50; 
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px; 
    border-radius: 4px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="processar_cadastro.php" method="POST">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" id="nome_produto" name="nome_produto" required>

        <label for="preco_compra">Preço de Compra:</label>
        <input type="text" id="preco_compra" name="preco_compra" required>

        <label for="preco_venda">Preço de Venda:</label>
        <input type="text" id="preco_venda" name="preco_venda" required>

        <label for="codigo_produto">Código do Produto:</label>
        <input type="text" id="codigo_produto" name="codigo_produto" required>

        <label for="nome_fornecedor">Nome do Fornecedor:</label>
        <input type="text" id="nome_fornecedor" name="nome_fornecedor" required>

        <input type="submit" value="Cadastrar Produto">
    </form>
</body>
</html>


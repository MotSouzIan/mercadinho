<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
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


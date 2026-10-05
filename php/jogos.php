<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"] ?? "");
    $preco = trim($_POST["preco"] ?? "");
    $estoque = trim($_POST["estoque"] ?? "");
    $plataforma = trim($_POST["plataforma"] ?? "");
    $categoria = trim($_POST["categoria"] ?? "");

    if (
        empty($nome) ||
        empty($preco) ||
        empty($estoque) ||
        empty($plataforma) ||
        empty($categoria)
    ) {
        echo "Preencha todos os campos.";
        exit;
    }

    if ($preco < 0) {
        echo "O preço não pode ser negativo.";
        exit;
    }

    if ($estoque < 0) {
        echo "O estoque não pode ser negativo.";
        exit;
    }

    echo "Jogo cadastrado com sucesso!";
}

?>
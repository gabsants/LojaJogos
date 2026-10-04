<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"] ?? "");
    $cnpj = trim($_POST["cnpj"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $endereco = trim($_POST["endereco"] ?? "");

    if (
        empty($nome) ||
        empty($cnpj) ||
        empty($telefone) ||
        empty($email) ||
        empty($endereco)
    ) {
        echo "Preencha todos os campos.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Digite um e-mail válido.";
        exit;
    }

    echo "Fornecedor cadastrado com sucesso!";
}

?>
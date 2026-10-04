<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"] ?? "");
    $cpf = trim($_POST["cpf"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $cargo = trim($_POST["cargo"] ?? "");

    if (
        empty($nome) ||
        empty($cpf) ||
        empty($telefone) ||
        empty($email) ||
        empty($cargo)
    ) {
        echo "Preencha todos os campos.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Digite um e-mail válido.";
        exit;
    }

    echo "Funcionário cadastrado com sucesso!";
}

?>
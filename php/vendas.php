<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cliente = trim($_POST["cliente"] ?? "");
    $funcionario = trim($_POST["funcionario"] ?? "");
    $jogo = trim($_POST["jogo"] ?? "");
    $quantidade = trim($_POST["quantidade"] ?? "");
    $preco = trim($_POST["preco"] ?? "");
    $pagamento = trim($_POST["pagamento"] ?? "");

    if (
        empty($cliente) ||
        empty($funcionario) ||
        empty($jogo) ||
        empty($quantidade) ||
        empty($preco) ||
        empty($pagamento)
    ) {
        echo "Preencha todos os campos.";
        exit;
    }

    if ($quantidade < 1) {
        echo "A quantidade deve ser maior que zero.";
        exit;
    }

    if ($preco < 0) {
        echo "O preço não pode ser negativo.";
        exit;
    }

    $total = $quantidade * $preco;

    echo "Venda registrada com sucesso! Total: R$ " . number_format($total, 2, ",", ".");
}

?>
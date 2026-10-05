document.addEventListener("DOMContentLoaded", function () {

    const formularios = document.querySelectorAll("form");

    formularios.forEach(function (formulario) {

        formulario.addEventListener("submit", function (event) {

            event.preventDefault();

            const formularioDados = new FormData(formulario);

            let arquivoPHP = "";

            if (formulario.id === "formCliente") {
                arquivoPHP = "php/clientes.php";
            }

            if (formulario.id === "formFuncionario") {
                arquivoPHP = "php/funcionarios.php";
            }

            if (formulario.id === "formFornecedor") {
                arquivoPHP = "php/fornecedores.php";
            }

            if (formulario.id === "formJogo") {
                arquivoPHP = "php/jogos.php";
            }

            if (formulario.id === "formVenda") {
                arquivoPHP = "php/vendas.php";
            }

            fetch(arquivoPHP, {
                method: "POST",
                body: formularioDados
            })
            .then(function (resposta) {
                return resposta.text();
            })
            .then(function (resultado) {
                alert(resultado);
                formulario.reset();
            })
            .catch(function (erro) {
                console.error(erro);
                alert("Erro ao enviar o formulário.");
            });

        });

    });

});
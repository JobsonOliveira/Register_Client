document.querySelector("#mostrar").addEventListener("click", () => {
    function fazerRequisicao() {
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Atualiza o elemento com o valor retornado pelo PHP
                document.querySelector("#dadosCliente").innerHTML = this.responseText;
            } else if (this.readyState == 4) {
                document.querySelector("#dadosCliente").innerText = "Erro ao obter o valor da variável PHP.";
            }
        };
        
        xhttp.open("GET", "../PHP/requisicao.php", true);
        xhttp.send();
    }

    fazerRequisicao();
});
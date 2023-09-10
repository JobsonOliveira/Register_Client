<?php
//CAPTURAR OS DADOS QUE ESTÃO NO INDEX
    if (isset($_POST["Cadastrar"])) {
        $Nome = $_POST["nome"];
        $CPF = $_POST["cpf"];
        $Senha = $_POST["senha"];
    }
//ENVIAR OS DADOS PARA O BANCO
$host = "localhost";
$bd = "formularioteste";
$user = "root";
$senha_user = "";

//$banco DEVE ESTAR POR ULTIMO
$con = mysqli_connect($host, $user, $senha_user, $bd);

//TRATAMENTO DE ERRO DE CONEXÃO
if(!$con){
    die("Conexão falhou." . mysqli_connect_error());
}

//RECEBER OS COMANDOS PARA O SQL
//'Nome', 'CPF', 'Senha' DEVEM SER IDENICOS AO NOME DA CADA TABELA DO SQL
$sql = "INSERT INTO cliente(Nome, CPF, Senha) VALUES('$Nome', '$CPF', '$Senha')";

//RECEBER O RESULTADO (SE FOI CADASTRADO OU NÃO)
$rs = mysqli_query($con, $sql);

//MOSTRAR NA TELA SE O CADASTRO FOI REALIZADO
if ($rs) {
    $arqv = "../HTML/principal.html";
    $aberto = file_get_contents($arqv);
    echo $aberto;
}
$con->close();
?>
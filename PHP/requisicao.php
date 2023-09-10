<?php
     // Passos para conectar ao banco de dados
     $host = "localhost"; // Endereço do servidor
     $user = "root"; // Nome de usuário do banco de dados
     $senha_user = ""; // Senha do banco de dados
     $bd = "formularioteste"; // Nome do banco de dados
 
     // Cria a conexão com o banco de dados
     $conn = new mysqli($host, $user, $senha_user, $bd);
 
     // Verifica a conexão
     if ($conn->connect_error) {
         die("Falha na conexão: " . $conn->connect_error);
     }
 
     // Query para recuperar o nome do banco de dados
     $sql = "SELECT * FROM cliente";
 
     $result = $conn->query($sql);
 
     if ($result->num_rows > 0 ) {
         // Exibe o nome em um componente HTML
         while ($row = $result->fetch_assoc()) {
         //$row = $result->fetch_assoc();
             echo "USUÁRIO: " . $row["Nome"] . " ";
             echo "CPF: " . $row["CPF"] . " ";
             echo "SENHA: " . $row["Senha"] . "\n\n";
         }
     } else {
         $Nome = "Não pegou";
     }
 
     // Fecha a conexão com o banco de dados
     $conn->close();
    
?>
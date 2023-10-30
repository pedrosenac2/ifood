<?php

// echo "<pre>";

// var_dump($_POST);
// var_dump($_GET):

    $nome               = $_POST['nome'];
    $sobrenome          = $_POST['sobrenome'];
    $telefone           = $_POST['telefone'];
    $email              = $_POST['email'];
    $data_nascimento    = $_POST['data_nascimento'];
    $endereco           = $_POST['endereco'];

    //porta, usuário, senha, nome data base
    //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
    $conexao = mysqli_connect("localhost", "root", "", "ifood") or die("Erro na conexão com banco de dados " . mysqli_error($conexao));


    $string_sql = "INSERT INTO cadastro (nome,sobrenome,telefone,email,data_nascimento,endereco) VALUES ('$nome','$sobrenome','$telefone','$email','$data_nascimento','$endereco')";
    // echo "ok ta passando";

    $insert_member_res = mysqli_query($conexao, $string_sql);

    //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
    if(mysqli_affected_rows($conexao) > 0){
        echo "Cadastro Realizado com Sucesso";
    } else {
        echo "Erro, não foi possível inserir no banco de dados";
    }
    //fecha conexão com banco de dados
    mysqli_close($conexao); 
    
?>
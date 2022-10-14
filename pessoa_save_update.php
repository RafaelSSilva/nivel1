<?php 
$dados = $_POST;
extract($dados);

if (!empty($id)) {
    $host     = '127.0.0.1';
    $user     = 'root';
    $password = '';
    $database = 'livro';

    $conn   = mysqli_connect($host, $user, $password, $database);
    $sql    = "UPDATE pessoa SET nome = '{$nome}', endereco = '{$endereco}', bairro = '{$bairro}', telefone = '{$telefone}', email = '{$email}',  id_cidade = '{$id_cidade}' WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        print 'Registro atualizada com sucesso. <br>';
    } else {
        print "Erro ao atualizar registro: {$result} <br>";
    }

    mysqli_close($conn);
}

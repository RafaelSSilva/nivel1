<?php
    $dados = $_GET;
    extract($dados);

    if (!empty($id)) {
        $host     = '127.0.0.1';
        $user     = 'root';
        $password = '';
        $database = 'livro';

        $conn   = mysqli_connect($host, $user, $password, $database);
        $result = mysqli_query($conn, "DELETE FROM pessoa WHERE id = '{$id}'");
        
        if ($result) {
            print 'Registro deletado com sucesso. <br>';
        } else {
            print "Erro ao deletar registro: {$result} <br>";
        }

        mysqli_close($conn);
    }
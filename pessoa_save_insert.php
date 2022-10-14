<?php
$dados    = $_POST;
$host     = '127.0.0.1';
$user     = 'root';
$password = '';
$database = 'livro';

$conn   = mysqli_connect($host, $user, $password, $database);
$result = mysqli_query($conn, "SELECT MAX(id) as next FROM pessoa");
$next   = (int) mysqli_fetch_assoc($result)['next'] + 1;
$sql    = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade) VALUES ('{$next}', '{$dados['nome']}', '{$dados['endereco']}', '{$dados['bairro']}', '{$dados['telefone']}', '{$dados['email']}', '{$dados['id_cidade']}')"; 
$result = mysqli_query($conn, $sql);

if ($result) {
    print 'Registro inserido com sucesso.<br>';
} else {
    print "Erro ao inserir registro: $result <br>";
}

mysqli_close($conn);

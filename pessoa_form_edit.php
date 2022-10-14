<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoa</title>
    <link href="css/form.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
    if (!empty($_GET['id'])) {
        $host     = '127.0.0.1';
        $user     = 'root';
        $password = '';
        $database = 'livro';
        $id       = (int) $_GET['id'];

        $conn   = mysqli_connect($host, $user, $password, $database);
        $result = mysqli_query($conn, "SELECT * FROM pessoa WHERE id = '{$id}'");
        $row    = mysqli_fetch_assoc($result);
        
        if (is_array($row)) {
            extract($row);
        }
        
        mysqli_close($conn);
    }
?>

<form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">
        <label>Código</label>
        <input id="id" name="id" type="text" readonly="1" style="width: 30%" value="<?=$id?>">
        <label>Nome</label>
        <input id="nome" name="nome" type="text"  style="width: 50%" value="<?=$nome?>">
        <label>Endereço</label>
        <input id="endereco" name="endereco" type="text"  style="width: 50%" value="<?=$endereco?>">
        <label>Bairro</label>
        <input id="bairro" name="bairro" type="text"  style="width: 25%" value="<?=$bairro?>">
        <label>Telefone</label>
        <input id="telefone" name="telefone" type="text"  style="width: 25%" value="<?=$telefone?>">
        <label>Email</label>
        <input id="email" name="email" type="text"  style="width: 25%" value="<?=$email?>">
        <label>Cidade</label>
        <select id="id_cidade" name="id_cidade">
            <?php 
                require_once "lista_combo_cidades.php";
                print lista_combo_cidades($id_cidade);
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>


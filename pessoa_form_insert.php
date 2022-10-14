<?php
    /**
     * http://localhost/nivel1/pessoa_form_insert.php
     * http://127.0.0.1/nivel1/pessoa_form_insert.php
     */    
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoa</title>
    <link href="css/form.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <form enctype="multipart/form-data" method="post" action="pessoa_save_insert.php">
        <label>Código</label>
        <input id="id" name="id" type="text" readonly="1" style="width: 30%">
        <label>Nome</label>
        <input id="nome" name="nome" type="text"  style="width: 50%">
        <label>Endereço</label>
        <input id="endereco" name="endereco" type="text"  style="width: 50%">
        <label>Bairro</label>
        <input id="bairro" name="bairro" type="text"  style="width: 25%">
        <label>Telefone</label>
        <input id="telefone" name="telefone" type="text"  style="width: 25%">
        <label>Email</label>
        <input id="email" name="email" type="text"  style="width: 25%">
        <label>Cidade</label>
        <select id="id_cidade" name="id_cidade">
            <?php 
                require_once "lista_combo_cidades.php";
                print lista_combo_cidades();
            ?>
        </select>
        <input type="submit">
    </form>
</body>
</html>
<?php
    include("funcoes.php");
    verifica_arquivo_existente("agendamentos.xml");
    adicionar_agendamento($_POST, "agendamentos.xml");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Barbearia IFSP 2020</title>
    <style>
        input{margin:2px}
    </style>
</head>
<body>

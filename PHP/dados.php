<?php

    include "conexao.php";

    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $email = $_POST["email"];

    $sql->query("insert into usuario(nome, data, email)values('$nome','$data','$email')");
?>
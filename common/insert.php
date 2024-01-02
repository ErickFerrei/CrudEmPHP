<?php
require_once('conexao.php');


if (isset($_POST)) {

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dtaniver = $_POST['dtaniver'];


    $query = $conn->prepare("INSERT INTO pessoa(`nome`, `sobrenome`, `dtaniver`)VALUES(:nome, :sobrenome, :dtaniver)");
    $query->bindParam(':nome', $nome);
    $query->bindParam(':sobrenome', $sobrenome);
    $query->bindParam(':dtaniver', $dtaniver);
    $query->execute();


    echo "<script>
    window.alert('Cadastrado com sucesso!'); 
    window.location.href = '/CrudEmPHP/index.php';
    </script>";
}

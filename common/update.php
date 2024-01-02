<?php
include_once('conexao.php');


if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $dtaniver = $_POST['dtaniver'];

    $sql = "UPDATE pessoa SET nome = :nome, sobrenome = :sobrenome, dtaniver = :dtaniver WHERE id = :id";

    $query = $conn->prepare($sql);
    $query->bindParam(':nome', $nome);
    $query->bindParam(':sobrenome', $sobrenome);
    $query->bindParam(':dtaniver', $dtaniver);
    $query->bindParam(':id', $id);

    if ($query->execute()) {
        echo "<script>
            window.alert('Atualizado com sucesso!'); 
            window.location.href = '/CrudEmPHP/index.php';
            </script>";
    } else {
        echo 'Erro ao Salvar';
    }
}

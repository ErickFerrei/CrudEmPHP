<?php
require_once('conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    try {

        $query = $conn->prepare("DELETE FROM pessoa WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();

        echo "<script>
            window.alert('Excluido com sucesso!'); 
            window.location.href = '/Conversor/index.php';
            </script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {

        $pdo = null;
    }
} else {
    echo "ID not provided.";
}

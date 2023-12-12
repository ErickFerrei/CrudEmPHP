<?php

include_once('common/conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $query = $conn->prepare("SELECT * FROM pessoa WHERE id = :id");
    $query->bindParam(':id', $id);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);


    if ($result) {
        $id  = $result['id'];
        $nome = $result['nome'];
        $sobrenome = $result['sobrenome'];
        $dtaniver = $result['dtaniver'];

    } else {
        echo 'Não foi encontrado nenhum resultado';
        exit;
    }


} else {

    echo 'ID não fornecido na URL';

}
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Conversor De Moedas</title>
</head>

<body>
<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h3>Atualização de Pessoa</h3>
        </div>


        <div class="card-body">
            <form action="common/update.php" method="POST">
                <div class="mb-3 col-md-12">
                    <label class="form-label fw-bold">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="<?= $nome ?>" disabled>
                </div>


                <div class="mb-3 col-md-12">
                    <label class="form-label fw-bold">SobreNome:</label>
                    <input type="text" class="form-control" name="sobrenome" value="<?php echo $sobrenome ?>" disabled>
                </div>

                <div class="mb-3 col-md-2">
                    <label class="form-label fw-bold">Data de Anivesario:</label>
                    <input type="date" class="form-control" name="dtaniver" value="<?= $dtaniver ?>" disabled>
                </div>

                <input  type="hidden" name="id" value="<?= $id ?>">


                <a href="index.php" class="btn btn-primary">Voltar</a>
            </form>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

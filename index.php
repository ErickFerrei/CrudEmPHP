<?php
require_once('common/conexao.php');
?>

<script>
    function confirma() {
        if (!confirm('Deseja Excluir esse cadastro!')) {
            return false;
        }
        return true;
    }
</script>
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
                <h3>Listagem De pessoas</h3>

                <a href="cadastro.php" class="btn btn-primary btn-sm">Novo</a>
            </div>

            <div class="card-body">
                <table class="table ">
                    <thead class="table-dark table table-striped">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">NOME</th>
                            <th class="text-center">SOBRENOME</th>
                            <th class="text-center">DATA DE ANIVERSARIO</th>
                            <th class="text-center">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($dado = $query->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <th scope="row text-center"><?php echo $dado['id']; ?></th>
                                <td class="text-uppercase text-center"><?php echo $dado['nome']; ?></td>
                                <td class="text-uppercase text-center"><?php echo $dado['sobrenome']; ?></td>
                                <td class="text-center"><?php echo date('d/m/Y', strtotime($dado['dtaniver'])); ?></td>

                                <td class="text-center">
                                    <a href="read.php?id=<?php echo $dado['id']; ?>" class="btn btn-primary btn-sm">Visualizar</a>
                                    <a href="view.php?id=<?php echo $dado['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                    <a href="common/delete.php?id=<?php echo $dado['id']; ?> " onclick="return confirma()" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>


                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
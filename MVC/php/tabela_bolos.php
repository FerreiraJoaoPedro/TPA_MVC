<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mesadinha</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha
    384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">

</head>
<body>

<div class="main">
    <div class="alignment">
    <div class="lista">
        <div class="row">
            <div class="col-lg-12">

                <table class="table">
                    <thead>
                    <div class="alignment">
                        <br><br>
                    <h2>Bolos cadastrados</h2>
                        <br><br>
                    </div>
                    <tr>
                        <th>ID</th>
                        <th>Sabor</th>
                        <th>Tamanho</th>
                        <th>Enfeite</th>
                        <th>Camadas</th>
                    </tr>
                    </thead>
                    <?php ?>
                            <tr>
                                <td><?php ?></td>
                                <td><?php ?></td>
                                <td><?php ?></td>
                                <td><?php ?></td>
                                <td><?php ?></td>
                                <td>
                                    <a href="alterar.php?codigo=<?php ?>" class="btn btn-outline-success "><i class="fa fa-edit"></i> </a>
                                    <a href="tabela_bolos.php?codigo=<?php ?>" class="btn btn-outline-danger "><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>

                        <?php ?>
                    <?php ?>
                        <tr>
                            <td colspan="7">Nenhum bolo cadastrado</td>
                        </tr>
                    <?php ?>
                    </tbody>
                </table>
                <div class="alignment">
                    <a href="cadastrar.php" class="botao_salvar">Novo</a>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
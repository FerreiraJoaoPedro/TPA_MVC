<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>EDICAO DOS BOLO MTO LOKO MERMAO</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<div class="main">
    <div class="form">

        <form action="alterar.php?codigo=<?php ?>" method="post" class="formulario">
            <div class="alignment">
            <h2>Altere seu bolo</h2>
            </div>
            <div class="flex">
                <div class="col-lg-12">
                    <p class="p">Sabor:</p>
                    <input type="text" name="sabor" id="sabor" class="input" value="<?php ?>" required><br><br>
                </div>
            </div>
            <div class="flex">
                <div class="col-lg-9">
                    <p class="p">Enfeite:</p>
                    <input type="text" name="enfeite" id="enfeite" class="input" value="<?php ?> "required><br><br>
                </div>
                <div class="col-lg-3">
                    <p class="p">Tamanho:</p>
                    <input type="text" name="tamanho" id="tamanho" class="input" value="<?php ?>" required><br><br>
                </div>
            </div>
            <div class="flex">
                <div class="col-lg-12">
                    <p class="p">Camadas:</p>
                    <input type="text" name="camadas" id="camadas" class="input" value="<?php ?>" required><br><br>
                </div>
            </div>



            <div class="alignment">
                <button class="botao_salvar" type="submit" name="Salvar" id="salvar">Salvar</button>
                <a href="../index.html" class="botao_voltar" name="voltar" id="voltar">Voltar</a>
            </div>
        </form>

    </div>
    </body>
</html>
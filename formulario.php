<?php

if(isset($_POST['submit']))
{

include_once('conexao.php');
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$prisma = $_POST['prisma'];
$residencia = $_POST['residencia'];
$servico = $_POST['servico'];


$result = mysqli_query($conn,"INSERT INTO usuarios(nome,cpf,data,placa,modelo,prisma,residencia,servico)VALUES ('$nome','$cpf','$data','$placa','$modelo','$prisma','$residencia','$servico')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Entrada</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <div class="top">
                <h3 class="pes"><a href="index.php">Pesquisar Placa</a></h3>
                <h3 class="pes1"><a href="main.php">Pesquisar CPF</a></h3>
                </div>
                <legend><b>Cadastro de Entrada</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" autocomplete="off" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" autocomplete="off" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <label for="dataregistro"><b>Data:</b></label>
                <input type="date" name="data" id="data" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="placa" id="placa" autocomplete="off" class="inputUser" required>
                    <label for="placa" class="labelInput">Placa</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modelo" id="modelo" autocomplete="off" class="inputUser" required>
                    <label for="modelo" class="labelInput">Modelo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="prisma" id="prisma" autocomplete="off"  class="inputUser" required>
                    <label for="prisma" class="labelInput">Prisma</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="residencia" id="residencia" autocomplete="off" class="inputUser" required>
                    <label for="residencia" class="labelInput">Número da Residência</label>
                </div>
                <p>Serviço:</p>
                <input type="radio" id="visitante" name="servico" value="visitante" required>
                <label for="visitante">Visitante</label>
                <br>
                <input type="radio" id="servico" name="servico" value="servico" required>
                <label for="servico">Serviço</label>
                <br>
                <input type="radio" id="veiculo" name="servico" value="veiculo" required>
                <label for="veiculo">Veículo do Morado</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
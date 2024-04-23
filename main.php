<?php include_once("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar por cpf</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="nav">
<a href="main.php">Limpar</a>
<a href="formulario.php">Cadastrar</a>
</div>
<div class="header"><h1>Pesquisar por CPF</h1></div>

<!--<form method="POST">-->
<form action="main.php" method="POST">
    <input type="text" name="cpf" id="cpf" placeholder="CPF" autocomplete="off">
    <input name="SendCpfUser" type="submit" value="Pesquisar">
</form><br><br>
    <?php
	$SendCpfUser = filter_input(INPUT_POST,'SendCpfUser',FILTER_SANITIZE_SPECIAL_CHARS);

	if($SendCpfUser) {
		$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);
		$result_usuario = "SELECT * FROM usuarios WHERE cpf LIKE '%$cpf'";
		$result_usuario = mysqli_query($conn, $result_usuario);
		while($row_usuario = mysqli_fetch_assoc($result_usuario)) {

			echo"ID:"." ". $row_usuario['id']."<br>";
			echo"Nome:"." ". $row_usuario['nome']."<br>";
			echo"cpf:"." ". $row_usuario['cpf']."<br>";
			echo"data:"." ". $row_usuario['data']."<br>";
			echo"placa:"." ". $row_usuario['placa']."<br>";
			echo"modelo:"." ". $row_usuario['modelo']."<br>";
			echo"prisma:"." ". $row_usuario['prisma']."<br>";
			echo"residencia:"." ". $row_usuario['residencia']."<br>";
			echo"servico:"." ". $row_usuario['servico']."<br>";
			
		}
	}

    ?>
    <!--importar script da máscara-->
    <script src="formMask_V2.js"></script>
    <script src="formMask_V1.js"></script>

</body>
</html>

<?php include_once("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisar por Placa</title>
		<link rel="stylesheet" href="main.css">
    </head>
    <body>
		<div class="nav">
	      <a href="index.php">Limpar</a>
	      <a href="formulario.php">Cadastrar</a>
	    </div>

	<div class="header"><h1>Pesquisar Placa</h1></div>

	<!--<form method="POST">-->
	<form action="index.php" method="POST">
         <label Nome:=""></label>
		 <input type="text" name="placa" autocomplete="off" placeholder="Digite a placa">

        <input name="SendPesqUser" type="submit" value="Pesquisar">
        
	</form><br><br>

	<?php
	$SendPesqUser = filter_input(INPUT_POST,'SendPesqUser',FILTER_SANITIZE_SPECIAL_CHARS);

	if($SendPesqUser) {
		$placa = filter_input(INPUT_POST,'placa',FILTER_SANITIZE_SPECIAL_CHARS);
		$result_usuario = "SELECT * FROM usuarios WHERE placa LIKE '%$placa'";
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
   </body>
</html>

		
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consulta - CNPJ</title>
	<link rel="stylesheet" type="text/css" href="src/css/style.css">	
</head>
<body>
	<main>
		<div class="box">
			<h1 class="title">Consultar CNPJ</h1>
			<div class="search">
				<form method="POST">
					<input class="input-cnpj" type="text" name="cnpj" placeholder="00.000.000/0001-91" onkeyup="mascara('##.###.###/####-##',this,event,true)" minlength="14">
					<input class="input-submit" type="submit" name="" value="Consultar">
				</form>
			</div>
			<div class="">
				<?php 
				
				if(isset($resultado["error"])) {
					echo '<h1 class="center">'.$resultado["error"].'</h1>';
				}elseif(!empty($resultado)) {

				?>
				<ul class="lista">
					<li class="target">NOME FANTASIA:</li>
					<span>- <?php echo isset($resultado["NOME FANTASIA"]) ? $resultado["NOME FANTASIA"] : "" ?> </span>
					<li class="target">RAZAO SOCIAL</li>
					<span>- <?php echo isset($resultado["RAZAO SOCIAL"]) ? $resultado["RAZAO SOCIAL"] : "" ?></span>
					<li class="target">STATUS</li>
					<span>- <?php echo isset($resultado["STATUS"]) ? $resultado["STATUS"] : "" ?></span>					
					<li class="target">CNAE PRINCIPAL DESCRICAO</li>
					<span>- <?php echo isset($resultado["CNAE PRINCIPAL DESCRICAO"]) ? $resultado["CNAE PRINCIPAL DESCRICAO"] : "" ?></span>
					<li class="target">CEP</li>
					<span>- <?php echo isset($resultado["CEP"]) ? $resultado["CEP"] : "" ?></span>
					<li class="target">EMAIL</li>
					<span>- <?php echo isset($resultado["EMAIL"]) ? $resultado["EMAIL"] : "" ?></span>
					<li class="target">TELEFONE</li>
					<span>- <?php echo isset($resultado["TELEFONE"]) ? $resultado["TELEFONE"] : "" ?></span>
				</ul>
			<?php } ?>
			</div>
		</div>
	</main>
	<script src="src/js/mascara.min.js"></script>
</body>
</html>
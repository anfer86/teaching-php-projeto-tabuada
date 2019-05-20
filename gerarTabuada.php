<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Projeto Tabuada</title>
</head>
<body>

<main>

	<h1>Projeto Tabuada</h1>

	<?php if ( ! isset($_POST['numero']) ) { ?> 
	
		<p>Não foi definido um valor de entrada. </p>
	
	<?php } else { 
		$numero = $_POST['numero'];
	?>
	
		<p>Resultado da tabuada do número <?php echo $numero ?> </p>

		<table>
			<thead>
				<tr>
					<th>Operação</th>				
					<th>Resultado</th>
				</tr>
			</thead>
			<tbody>
				<?php for ($i=1; $i <= 10; $i++) { ?>
				<tr>
					<td><?php echo $numero . ' x ' . $i ?></td>
					<td><?php echo $numero * $i ?></td>				
				</tr>
				<?php } ?>
			</tbody>
		</table>
	
	<?php } ?>

</main>

</body>
</html>
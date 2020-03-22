<?php 
session_start();
$panier = $_SESSION['panier'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>
</head>
<body>
	<table border="1" cellpadding="6">
		<tr>
			<th>ID</th>
			<th>QUANTITE</th>
		</tr>
		<?php foreach ($panier as $id => $qte): ?>
			<tr>
				<td><?= $id ?></td>
				<td><?= $qte ?></td>
			</tr>
			<?php endforeach; ?>
	</table>

</body>
</html>
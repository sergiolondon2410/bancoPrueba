<h1>Cuentas</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<td>Numero</td>
			<td>Saldo</td>
		</tr>
	</thead>
 	<?php foreach ($lista as $value):?>
 	<tbody>
		<tr>
			<td><?= $value["numero"] ?></td>
			<td><?= $value["saldo"] ?> $COP</td>
		</tr>
	</tbody>
	<?php endforeach ?>
</table>
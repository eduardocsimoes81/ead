<h1>Cursos</h1>

<a href="<?php echo BASE_URL; ?>home/adicionar">Adicionar Curso</a><br>

<table border="0" width="100%">
	<tr>
		<th>Images</th>
		<th>Nome</th>
		<th width="80">Qt. de Alunos</th>
		<th>Acoes</th>
	</tr>
	<?php foreach($cursos as $curso){ ?>
		<tr>
			<td width="150"><a href="<?php echo BASE_URL; ?>home/editar/<?php echo $curso['id']; ?>"><img src="<?php echo BASE_URL; ?>../assets/images/cursos/<?php echo $curso['imagem']; ?>" border="0" width="130" height="70"></a></td>
			<td><?php echo $curso['nome']; ?></td>
			<td align="center"><?php echo $curso['qtalunos']; ?></td>
			<td width="200">
				<a href="<?php echo BASE_URL; ?>home/editar/<?php echo $curso['id']; ?>">Editar Curso</a> - 
				<a href="<?php echo BASE_URL; ?>home/excluir/<?php echo $curso['id']; ?>">Excluir Curso</a>
			</td>
		</tr>
	<?php } ?>
</table>
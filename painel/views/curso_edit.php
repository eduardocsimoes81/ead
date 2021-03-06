<h1>Editar Curso</h1>

<form method="POST" enctype="multipart/form-data">

	Nome do curso:<br>
	<input type="text" name="nome" value="<?php echo $curso['nome']; ?>"><br><br>

	Descricao:<br>
	<textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $curso['descricao']; ?></textarea><br><br>

	Imagem:<br>
	<input type="file" name="imagem"><br><br>
	<img src="<?php echo BASE_URL; ?>../assets/images/cursos/<?php echo $curso['imagem']; ?>" border="0" height="80"><br><br>

	<input type="submit" value="Salvar">
</form>

<hr>

<h2>Aulas</h2>

<fieldset>
	<legend>Adicionar Modulo Novo</legend>
	<form method="POST">
		Nome do Modulo:<br>
		<input type="text" name="modulo">
		<input type="submit" value="Adicionar Modulo">
	</form>
</fieldset>

<fieldset>
	<legend>Adicionar Aula Nova</legend>
	<form method="POST">
		Titulo da Aula:<br>
		<input type="text" name="aula"><br><br>

		Modula da Aula:<br>
		<select name="moduloaula">
		<?php foreach($modulos as $modulo){ ?>
			<option value="<?php echo $modulo['id']; ?>"><?php echo $modulo['nome']; ?></option>		
		<?php } ?>
		</select><br><br>

		Tipo da Aula:<br>
		<select name="tipo" id="">
			<option value="video">Video</option>
			<option value="poll">Questionario</option>
		</select><br><br>

		<input type="submit" value="Adicionar Aula">
	</form>
</fieldset>

<?php foreach($modulos as $modulo){ ?>
	
	<h4><?php echo $modulo['nome']; ?> - <a href="<?php echo BASE_URL; ?>home/edit_modulo/<?php echo $modulo['id']; ?>">[editar]</a> - <a href="<?php echo BASE_URL; ?>home/del_modulo/<?php echo $modulo['id']; ?>">[excluir]</a></h4>

	<?php foreach($modulo['aulas'] as $aula){ ?>
		<h5><?php echo $aula['nome']; ?> - <a href="<?php echo BASE_URL; ?>home/edit_aula/<?php echo $aula['id']; ?>">[editar]</a> - <a href="<?php echo BASE_URL; ?>home/del_aula/<?php echo $aula['id']; ?>">[excluir]</a></h5>
	<?php } ?>
<?php } ?>


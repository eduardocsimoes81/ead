<h2>Editar Aula - Video</h2>

<form method="POST">
	Titulo da Aula:<br>
	<input type="text" name="nome" value="<?php echo $aula['nome']; ?>"><br><br>

	Descricao da Aula:<br>
	<textarea name="descricao"><?php echo $aula['descricao']; ?></textarea><br><br>

	URL do video:<br>
	<input type="text" name="url" value="<?php echo $aula['url']; ?>"><br><br>

	<input type="submit" value="Salvar">
</form>
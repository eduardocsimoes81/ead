<div class="cursoinfo">
	<img src="<?php echo BASE_URL; ?>assets/images/cursos/<?php echo $curso->getImagem(); ?>" border="0" height="60">

	<h3><?php echo $curso->getNome(); ?></h3>
	<?php echo $curso->getDescricao(); ?><br>
	<?php echo $aulas_assistidas.' / '.$total_aulas.' ('.(($aulas_assistidas/$total_aulas)*100).'%)'; ?>
</div>

<div class="curso_left">
	<?php foreach ($modulos as $modulo) { ?>
		<div class="modulo"><?php echo $modulo['nome']; ?></div>
		<?php foreach ($modulo['aulas'] as $aula) { ?>
			<a href="<?php echo BASE_URL; ?>cursos/aula/<?php echo $aula['id']; ?>">
				<div class="aula">
					<?php echo $aula['nome']; ?>
					<?php if($aula['assistido'] === true){ ?>
						<img src="<?php echo BASE_URL; ?>assets/images/diversas/v.png" border="0" height="20">		
					<?php } ?>					
				</div>
			</a>
		<?php } ?>
	<?php } ?>
</div>

<div class="curso_right">
	<h1>Vídeo - <?php echo $aula_info['nome']; ?></h1>
	
	<iframe id="video" src="//player.vimeo.com/video/<?php echo $aula_info['url']; ?>" frameborder="0" style="width:100%"></iframe>

	<?php echo $aula_info['descricao']; ?><br><br>

	<?php if($aula_info['assistido'] == '1'){ ?>
		Esta aula já foi assistida!
	<?php }else{ ?>
		<button class="teste" onclick="marcarAssistido(this)" data-id="<?php echo $aula_info['id_aula']; ?>">Marcar como assistir</button>		
	<?php } ?>

	<hr>
	
	<h3>Dúvidas? Envie sua pergunta!</h3>
	<form method="POST" action="" class="form_duvida">
		<textarea name="duvida" id="" cols="30" rows="10"></textarea><br><br>

		<input type="submit" value="Enviar Duvida">
	</form>
</div>

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
	
</div>
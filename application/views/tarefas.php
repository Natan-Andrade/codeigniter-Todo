<?php
	echo '<ul>';
	foreach ($tarefas as $key => $value) {
		echo '<li><a href="'.$value['id'].'">'.$value['titulo'].'</a></li>';
	}
	echo '</ul>';
?>

<h2>Cadastrar nova tarefa</h2>
<?php echo validation_errors(); ?>
<?php echo form_open('tarefas'); ?>

	<input type="text" name="titulo" placeholder="Tarefa...">
	<input type="submit" value="Cadastrar!">

</form>
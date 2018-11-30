<p><strong>Listado de los posts:</strong>
	<span class="dataRight">
		<a href="#">Añadir</a></span>
	</span>
</p>

<?php foreach($posts as $post) { ?>
<p class="dataCrud">
	<span><?php echo $post->title.":"; ?></span>
	<span class="dataRight">
		<span class="dataLeft"><a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Visualizar</a></span>
		<span class="dataLeft"><a href="#">Modificar</a></span>
		<span class="dataLeft"><a href="#">Eliminar</a></span>
	</span>
</p>
<?php } ?>
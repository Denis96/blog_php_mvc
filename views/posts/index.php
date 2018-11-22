<p class="data"><strong>Listado de los posts:</strong></p>

<?php foreach($posts as $post) { ?>
<p class="data">
	<?php echo $post->author.":"; ?>
	<a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Ver
	contenido</a>
</p>
<?php } ?>
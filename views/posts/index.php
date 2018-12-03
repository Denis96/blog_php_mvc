<p><strong>Listado de los posts:</strong>
	<span class="dataRight">
		<a href='?controller=posts&action=add'>Add</a></span>
	</span>
</p>

<?php foreach($posts as $post) { ?>
<p class="dataCrud">
	<span><?php echo $post->title.":"; ?></span>
	<span class="dataRight">
		<span class="dataLeft"><a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Show</a></span>
		<span class="dataLeft"><a href='?controller=posts&action=updateForm&id=<?php echo $post->id; ?>'>Update</a></span>
		<span class="dataLeft"><a href='?controller=posts&action=delete&id=<?php echo $post->id; ?>'>Delete</a></span>
	</span>
</p>
<?php } ?>
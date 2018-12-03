<p><strong>Listado de los authors:</strong>
	<span class="dataRight">
		<a href='?controller=author&action=add'>Add</a></span>
	</span>
</p>

<?php foreach($author as $author1) { ?>
<p class="dataCrud">
	<span><?php echo $author1->title.":"; ?></span>
	<span class="dataRight">
		<span class="dataLeft"><a href='?controller=author&action=show&id=<?php echo $author1->id; ?>'>Show</a></span>
		<span class="dataLeft"><a href='?controller=author&action=updateForm&id=<?php echo $author1->id; ?>'>Update</a></span>
		<span class="dataLeft"><a href='?controller=author&action=delete&id=<?php echo $author1->id; ?>'>Delete</a></span>
	</span>
</p>
<?php } ?>
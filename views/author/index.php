<p><strong>Authors list:</strong>
	<span class="dataRight">
		<a href='?controller=author&action=add'>Add</a></span>
	</span>
</p>

<?php foreach($authors as $author) { ?>
<p class="dataCrud">
	<span><?php echo "#".$author->id." ".$author->nick.":"; ?></span>
	<span class="dataRight">
		<span class="dataLeft"><a href='?controller=author&action=show&id=<?php echo $author->id; ?>'>Show</a></span>
		<span class="dataLeft"><a href='?controller=author&action=updateForm&id=<?php echo $author->id; ?>'>Update</a></span>
		<span class="dataLeft"><a href='?controller=author&action=delete&id=<?php echo $author->id; ?>'>Delete</a></span>
	</span>
</p>
<?php } ?>
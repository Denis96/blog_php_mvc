<form action='?controller=posts&action=insert' method="post" enctype="multipart/form-data">
    
    <div>
        <p><strong>Autor: </strong></p>
        <input type='text' name='autor' <?php echo "value=\".$post->author\""; ?> required/>
    </div>
    
    <div>
        <p><strong>Title: </strong></p>
        <input type='text' name='title' <?php echo "value=\".$post->title\""; ?> required/>
    </div>
    
    <div>
        <p><strong>Post: </strong></p>
        <textarea name='post' class='form-control' required><?php echo $post->content; ?></textarea>
    </div>
    <br><br>
    <input type="submit" value="Submit">

</form>	
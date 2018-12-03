<form action='?controller=posts&action=insert' method="post" enctype="multipart/form-data">
    
    <div>
        <p><strong>Autor: </strong></p>
        <input type='text' name='autor' required/>
    </div>
    
    <div>
        <p><strong>Title: </strong></p>
        <input type='text' name='title' required/>
    </div>
    
    <div>
        <p><strong>Post: </strong></p>
        <textarea name='post' class='form-control' required></textarea>
    </div>
    <br><br>
    <input type="submit" value="Submit">

</form>	
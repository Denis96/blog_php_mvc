<form action='?controller=author&action=insert' method="post" enctype="multipart/form-data">
    
    <div>
        <p><strong>Nick: </strong></p>
        <input type='text' name='nick' <?php echo "value=\".$author->nick\""; ?> required/>
    </div>
    
    <div>
        <p><strong>Name: </strong></p>
        <input type='text' name='name' <?php echo "value=\".$author->name\""; ?> required/>
    </div>
    
    <div>
        <p><strong>Last name: </strong></p>
        <input type='text' name='lastName' <?php echo "value=\".$author->lastName\""; ?> required/>
    </div>
    <br><br>
    <input type="submit" value="Submit">

</form>	
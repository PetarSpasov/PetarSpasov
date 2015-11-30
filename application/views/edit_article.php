<div id="content">
<h2>Edit Article</h2> 
<form method="post"   enctype="multipart/form-data" role="form" action="<?php echo $action;?>">
    <table>
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" value="<?php echo $data->title;?>"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="author" value="<?php echo $data->author;?>"></td>
        </tr>
        <tr>
            <td>PostMessage</td>
            <td><input type="text" name="postMessage" value="<?php echo $data->postMessage;?>"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
</div>


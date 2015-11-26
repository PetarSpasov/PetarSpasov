<div id="content">
    <center> <h2>My Blog</h2>  <a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php"></a>
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>

    <table class="table table-condensed">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) { ?>
                <tr>
                    <td> <?php echo $row['title']; ?>
                    </td>
                    <td> <?php echo $row['author']; ?>
                    </td>
                    <td> <?php echo $row['date']; ?>
                    </td>
                    <td><img src="<?php echo base_url("/images/thumb_". $row['image']); ?>" />
                    <td> <a href="<?php echo site_url('blog/article/' . $row['id']) ?>">ReadMore</a></td>
                    <td> <a href="<?php echo site_url('blog/delete/' . $row['id']) ?>">Delete</a></td>
                    <td> <a href="<?php echo site_url('blog/update/' . $row['id']) ?>">Update</a></td>
                    <td></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php echo $paginglinks; ?>
</div>
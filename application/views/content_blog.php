<div id="content">
    <center> <h2>My Blog</h2></center>
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
            <?php
            $query = $this->db->get('article');
            ?>
            <?php foreach ($query->result() as $row) { ?>
                <tr>
                    <td> <?php echo $row->title; ?>
                    </td>
                    <td> <?php echo $row->author; ?>
                    </td>
                    <td> <?php echo $row->date; ?>
                    </td>
                    <td><img src=./images/thumb_<?php echo $row->image; ?> />
                    <td> <a href="<?php echo base_url('blog/article/' . $row->id) ?>">Show more</a></td>
                    <td></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
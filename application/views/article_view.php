<div id=content>
    <base href="http://localhost/ci/" target="_blank">
    <img src=./images/<?php echo $row->image; ?> />
    <br/>
    <?php echo $row->title . '<br/>'; ?>
    <?php
    echo 'Author: ';
    echo $row->author . '<br/>';
    echo 'Content: ';
    echo $row->postMessage . '<br/>';
    echo 'Date: ';
    echo $row->date . '<br/>';
    echo 'Views: ';
    echo $row->views . '<br>';
    ?>
</div>
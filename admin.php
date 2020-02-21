<?php
require 'lib/functions.php';
$comments = get_comments($par = false);


if (isset($_POST['delete'])) {
    delete_comment($_POST['id']);
}
else if (isset($_POST['id'])) {
    approve_comment($_POST['id']);
}

require 'layout/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="comment-title">Approve or Delete Comments</h2>
            <ol class="comment-list">
                <?php
                foreach ($comments as $comment) {?>

                    <li id="comment-<?php echo $comment['id'] ;?>" class="comment-item">
                        <div class="comment-body">
                            <div class="comment-meta">
                                <div class="comment-author">
                                    <img src="images/author.png" class="avatar" height="64" width="64">
                                    <b class="fn"><?php echo $comment['name']; ?></b>
                                    <span class="says">says:</span>
                                </div>
                                <div class="comment-content">
                                    <p><?php echo $comment['text']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-btn text-right">
                            <button class="js-approve btn btn-success" value="<?php echo $comment['id']; ?>">Approve</button>
                            <button class="js-delete btn btn-danger" value="<?php echo $comment['id']; ?>">Delete</button>
                        </div>
                    </li>

                <?php } ?>
            </ol>
        </div>
    </div>
</div>
<script src="js/jquery.js"> </script>
<script>
    $('.js-approve').click(function(e){
            $.ajax({
                url: 'admin.php',
                type: 'post',
                data: { "id": e.target.value},
                success: function(response)
                {
                    $(e.target).parents("li:first").remove();
                }
            });

        }
    )

    $('.js-delete').click(function(e){
            $.ajax({
                url: 'admin.php',
                type: 'post',
                data: { "id": e.target.value, "delete": true},
                success: function(response)
                {
                    $(e.target).parents("li:first").remove();
                }
            });
        }
    )
</script>

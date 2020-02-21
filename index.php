<?php
    require 'lib/functions.php';
    $fruits = get_fruits();
    $count = 0;

?>

<?php require 'layout/header.php'; ?>

<div class="jumbotron">
    <div class="container">
        <h1>It's time for refreshment!</h1>

        <p>With over 1 million citrus lovers!</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php $comments = get_comments($par = true);
            foreach ($fruits as $fruit) {
                if ($count++ % 3 == 0){ ?>
                    </div><div class="row">
                <?php } ?>

            <div class="col-md-4 fruit-list-item">
                <h2><a href="#"><?php echo $fruit['title']; ?></a></h2>
                <img src="/images/<?php echo $fruit['image']; ?>" class="img-rounded">
                <p><?php echo $fruit['description']; ?></p>
            </div>
        <?php } ?>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2 id="comments" class="comment-title">Comments</h2>
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
                        </li>

               <?php } ?>
            </ol>
        </div>
    </div>

    <h2 class="form-title">Leave a Comment</h2>
    <div class="row">
        <div class="col-md-6">
            <form method="post">
            <div class="form-group">
                <label>Name:</label>
                <input class="form-control" type="text" id="name" name="name" required placeholder="Enter Name"/>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="email" id="email" name="email" required placeholder="Enter Email"/>
            </div>
            <div class="form-group">
                <label>Comment:</label>
                <textarea rows="5" class="form-control" id="text"  name="text" required placeholder="Enter Comment"></textarea>
            </div>

            <div class="form-group text-right">
                <input class="btn btn-success" type="submit" name="submit" value="Add comment"/>
            </div>
            </form>
        </div>
    </div>
</div>
    <hr>

<script src="js/jquery.js"> </script>
<script>
    $('form').submit(function(e){

        e.preventDefault();
            $.ajax({
                url: 'index.php',
                type: 'post',
                data: {
                    "name": $(e.target).find('#name').val(),
                    "email": $(e.target).find('#email').val(),
                    "text":$(e.target).find('#text').val()
                },
                success: function(response)
                {
                    $(e.target).find('#name').val("");
                    $(e.target).find('#email').val("");
                    $(e.target).find('#text').val("");
                    alert('Comment added');
                }
            });
        }
    )
</script>
<?php require 'layout/footer.php'; ?>

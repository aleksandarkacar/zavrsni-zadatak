
<?php include_once('db.php') ?>


<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<?php  
    if (isset($_GET['post_id'])){
        $sql = "SELECT id,title,body,created_at,author FROM posts WHERE id = {$_GET['post_id']}";
        $post = fetchData($connection,$sql);
    }
            // echo '<pre>';
            // var_dump($_GET['post_id']); 
            // echo '</pre>';

            // echo '<pre>';
            // var_dump($post); 
            // echo '</pre>';
        $sql2 = "SELECT author,text FROM comments WHERE post_id = {$_GET['post_id']}";
        $comments = fetchData($connection,$sql2,true);
            // echo '<pre>';
            // var_dump($comments); 
            // echo '</pre>';
?>

<body>
    <?php include('header.php') ?>
    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo($post['id']) ?>"> <?php echo($post['title']) ?> </a></h2>
                    <p class="blog-post-meta"><?php echo($post['created_at']) ?> by <a href="#"><?php echo($post['author']) ?></a></p>

                    <p><?php echo($post['body']) ?></p>
                </div><!-- /.blog-post -->

                <ul> 
                    <?php foreach ($comments as $comment) { ?>
                    <li> 
                    User <?php echo($comment['author']) ?> Says : <?php echo($comment['text']) ?>
                    </li>
                    <hr>
                    <?php } ?>
                </ul>

            </div><!-- /.blog-main -->

            <?php include('sidebar.php') ?>

        </div><!-- /.row -->

    </main><!-- /.container -->
</body>

<?php include('footer.php') ?>

</html>





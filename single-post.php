
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
        $sql = "SELECT p.id,p.title,p.body,p.user_id,p.created_at,u.First_Name,u.Last_Name FROM posts AS p INNER JOIN users as u ON p.user_id = u.id WHERE p.id = {$_GET['post_id']}";
        $post = fetchData($connection,$sql);
    }
            // echo '<pre>';
            // var_dump($_GET['post_id']); 
            // echo '</pre>';

            // echo '<pre>';
            // var_dump($post); 
            // echo '</pre>';

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
                    <p class="blog-post-meta"><?php echo($post['created_at']) ?> by <a href="#"><?php echo($post['First_Name']." ".$post['Last_Name']) ?></a>
                    <button onclick="deletePost()" class="btn btn-default">Delete Post</button>
                    <script>
                     function deletePost() {
                     var confirmation = confirm("Are you sure you want to delete this post?");
                     console.log(confirmation);
                     if (confirmation) {
                        window.location.href = "remove-post.php?post_id=<?php echo($post["id"])?>";
                        console.log("upaosam")
                     }
                     }
                    </script>

                    </p>

                    <p><?php echo($post['body']) ?></p>
                </div><!-- /.blog-post -->
                
                <?php include('comments.php')?>


            </div><!-- /.blog-main -->

            <?php include('sidebar.php') ?>

        </div><!-- /.row -->

    </main><!-- /.container -->
</body>

<?php include('footer.php') ?>

</html>





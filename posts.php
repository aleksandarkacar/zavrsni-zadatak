
<?php include('header.php') ?>
<?php include_once('db.php') ?>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

        <?php

            $sql = "SELECT id,title,body,author,created_at FROM posts";
            $statement = $connection->prepare($sql);
            $posts = fetchData($connection, $sql, true);

            usort($posts, function ($first,$second) // Sortiranje po datumu kako je zadatak trazio
                {
                    if ($first["created_at"] < $second["created_at"]){
                        return true;
                    }
                    return false;
                }
            );

            // echo '<pre>';
            // var_dump($posts); 
            // echo '</pre>';

            ?>

            <?php
                foreach ($posts as $post) {
            ?>

            <div class="blog-post">
                <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo($post['id']) ?>"> <?php echo($post['title']) ?> </a></h2>
                <p class="blog-post-meta"><?php echo($post['created_at']) ?> by <a href="#"><?php echo($post['author']) ?></a></p>

                <p><?php echo($post['body']) ?></p>
            </div><!-- /.blog-post -->

            <?php
                }
            ?>

        </div><!-- /.blog-main -->

        <?php include('sidebar.php') ?>

    </div><!-- /.row -->

</main><!-- /.container -->

<?php include('footer.php') ?>



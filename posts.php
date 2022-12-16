
<?php include('header.php') ?>
<?php include_once('db.php') ?>

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

        <?php

            $sql = "SELECT p.id,p.title,p.body,p.user_id,p.created_at,u.First_Name,u.Last_Name FROM posts AS p INNER JOIN users as u ON p.user_id = u.id ORDER BY created_at DESC";
            $statement = $connection->prepare($sql);
            $posts = fetchData($connection, $sql, true);

            // echo '<pre>';
            // var_dump($posts); 
            // echo '</pre>';

            ?>

            <?php
                foreach ($posts as $post) {
            ?>

            <div class="blog-post">
                <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo($post['id']) ?>"> <?php echo($post['title']) ?> </a></h2>
                <p class="blog-post-meta"><?php echo($post['created_at']) ?> by <a href="#"><?php echo($post['First_Name']." ".$post['Last_Name']) ?></a></p>

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



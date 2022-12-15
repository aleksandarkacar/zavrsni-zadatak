<?php include_once('db.php') ?>

<?php
$sql = "SELECT id,title FROM posts ORDER BY created_at DESC LIMIT 5";
            $statement = $connection->prepare($sql);
            $posts = fetchData($connection, $sql, true);
?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Latest Posts</h4>
            </div>
                
            <div class="sidebar-module" >
            <?php
                foreach ($posts as $post) {
            ?>
            <h2 class="blog-post-sidebar"><a href="single-post.php?post_id=<?php echo($post['id']) ?>"> <?php echo($post['title']) ?> </a></h2>
            <?php
                }
                ?>
            </div>  
        </aside><!-- /.blog-sidebar -->
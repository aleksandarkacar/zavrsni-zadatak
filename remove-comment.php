<?php include_once('db.php') ?>
<?php 

var_dump($_GET);

$sql = "DELETE FROM comments WHERE id = ".$_GET['comment_id'];
echo $sql;
$statement = $connection->prepare($sql);
$statement->execute();



header("Location: single-post.php?post_id=".$_GET['post_id']);



?>
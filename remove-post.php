<?php include_once('db.php') ?>
<?php 

var_dump($_GET);



//Brisanje komntara is posta prvo zbog constraint-a
$sql = "DELETE FROM comments WHERE post_id = ".$_GET['post_id'];
echo $sql;
$statement = $connection->prepare($sql);
$statement->execute();

//Brisanje posta
$sql = "DELETE FROM posts WHERE id = ".$_GET['post_id'];
echo $sql;
$statement = $connection->prepare($sql);
$statement->execute();



header("Location: index.php");



?>
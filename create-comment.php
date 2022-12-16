<?php include_once('db.php') ?>
<?php

// var_dump($_POST);
// echo $_POST['post_id'];

if( $_POST['author'] == "" ||  $_POST['text'] == "" )
{
    header("Location: single-post.php?post_id=".$_POST['post_id']."&error=400"); exit;
}
else
{
  
$sql = "INSERT INTO comments (author,text,post_id) VALUES ('".$_POST['author']."','".$_POST['text']."',".$_POST['post_id'].");";
echo $sql;
$statement = $connection->prepare($sql);
$statement->execute();

header("Location: single-post.php?post_id=".$_POST['post_id']);

}
?>
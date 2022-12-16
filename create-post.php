<?php include_once('db.php') ?>
<?php

// var_dump($_POST);
// echo $_POST['post_id'];

if( $_POST['author'] == "" ||  $_POST['title'] == "" || $_POST['body'] == "" )
{
    header("Location: create.php?post_id=".$_POST['post_id']."&error=400"); exit;
}
else
{
  
$sql = "INSERT INTO posts (author,title,body,created_at) VALUES ('".$_POST['author']."','".$_POST['title']."','".$_POST['body']."','".$_POST['date']."');";
echo $sql;
$statement = $connection->prepare($sql);
$statement->execute();

header("Location: index.php");

}
?>
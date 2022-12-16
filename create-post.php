<?php include_once('db.php') ?>
<?php

// var_dump($_POST);
// echo $_POST['post_id'];

if( $_POST['First_Name'] == "" ||  $_POST['title'] == "" || $_POST['body'] == "" || $_POST['Last_Name'] == "" )
{
    header("Location: create.php?post_id=".$_POST['post_id']."&error=400"); exit;
}
else
{

$sql = "INSERT INTO users (First_Name,Last_Name) VALUES ('".$_POST['First_Name']."','".$_POST['Last_Name']."');";
// echo $sql;
$statement = $connection->prepare($sql);
$statement->execute();

$sql = "SELECT id FROM users WHERE First_Name = '".$_POST['First_Name']."' AND Last_Name = '".$_POST['Last_Name']."';";
echo $sql;
$statement = $connection->prepare($sql);
$user = fetchData($connection, $sql);

var_dump($user);
  
$sql = "INSERT INTO posts (user_id,title,body,created_at) VALUES ('".$user['id']."','".$_POST['title']."','".$_POST['body']."','".$_POST['date']."');";
echo $sql;
$statement = $connection->prepare($sql);
$statement->execute();

header("Location: index.php");

}
?>
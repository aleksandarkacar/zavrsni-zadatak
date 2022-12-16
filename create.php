<?php include('header.php') ?>
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

<main role="main" class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">
        
            <?php 

            if (isset($_GET["error"])) { 
    
            ?>

                <div class="alert alert-danger" role="alert">
                    Feilds cannot be empty!!!
                </div>

            <?php } ?>

        <form method="post" action="create-post.php">
                    <table>
                        <tr>
                            <td> FirstName: </td> 
                            <td> <input id="First_Name" name="First_Name" type="text" > </td> 
                            <td> LastName: </td>
                            <td> <input id="Last_Name" name="Last_Name" type="text" > </td>
                        </tr>
                        <tr>
                            <td> Title: </td>
                            <td> <input id="title" name="title" type="text" ></input> </td>
                        </tr>
                        <tr>
                            <td> Body </td>
                            <td> <textarea id="body" name="body" ></textarea> </td>
                        </tr>
                        <tr>
                            <input id="date" name="date" type="hidden" value="<?php echo(date("Y-m-d"))?>">
                            <td> <input type="submit" value="Submit"> </td>
                        </tr>
                    </table>

        </div><!-- /.blog-main -->

    </div><!-- /.row -->

</main><!-- /.container -->

<?php include('footer.php') ?>
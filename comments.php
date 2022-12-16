<?php // Query za komentare
$sql2 = "SELECT author,text,id FROM comments WHERE post_id = {$_GET['post_id']}";
$comments = fetchData($connection,$sql2,true);
?>

                <!-- Code za ispisivanje kometara i hide comments dugmeta -->

                <script src="hide-comments.js"></script> 
                <button name="hide-comments-button" type="button" onclick="hideComments()" class="btn btn-default">Hide Comments</button>


            
            
            
            
                </form>

                <ul name="comments-ul"> 

                    <?php 

                    if (isset($_GET["error"])) { 
                        
                    ?>

                        <div class="alert alert-danger" role="alert">
                            Feilds cannot be empty!!!
                        </div>

                    <?php
                    
                    }

                    ?>


                    <form method="post" action="create-comment.php">
                        <table>
                            <tr>
                                <td> Author: </td> 
                                <td> <input id="author" name="author" type="text" > </td>
                            </tr>
                            <tr>
                                <td> Comment: </td>
                                <td> <textarea id="text" name="text" ></textarea> </td>
                            </tr>
                            <tr>
                                <input id="post_id" name="post_id" type="hidden" value="<?php echo($post['id']) ?>">
                                <td> <input type="submit" value="Submit"> </td>
                            </tr>
                        </table>

                    <?php foreach ($comments as $comment) { ?>
                    <li> 
                    User <?php echo($comment['author']) ?> Says : <?php echo($comment['text']) ?> 
                    <a name="delete-comment-button" href="remove-comment.php?comment_id=<?php echo($comment["id"])?>&post_id=<?php echo($_GET['post_id'])?>" class="btn btn-default">Delete comment</a>
                    </li>
                    <hr>
                    <?php } ?>
                </ul>

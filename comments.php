<?php // Query za komentare
$sql2 = "SELECT author,text FROM comments WHERE post_id = {$_GET['post_id']}";
$comments = fetchData($connection,$sql2,true);
?>

                <!-- Code za ispisivanje kometara i hide comments dugmeta -->

                <script src="hide-comments.js"></script> 
                <button name="hide-comments-button" type="button" onclick="hideComments()" class="btn btn-default">Hide Comments</button>

                <ul name="comments-ul"> 

                    <?php foreach ($comments as $comment) { ?>
                    <li> 
                    User <?php echo($comment['author']) ?> Says : <?php echo($comment['text']) ?>
                    </li>
                    <hr>
                    <?php } ?>
                </ul>

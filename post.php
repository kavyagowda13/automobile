<?php
include 'db.php';
if (isset($_POST['submit']))
        { 
             $sendername = $_POST['sendername'];
             $comment = $_POST['comment'];

             if($sendername == 'Kavya')
             {
             	$src = 'images/girl1.jpg';
             }

             if($sendername == 'Navya')
             {
             	 $src = 'images/girl2.jpg';
             }
     
    $query = "INSERT INTO fbchat (sendingto,comment,src) VALUES ('$sendername','$comment','$src')"; 
             $run = $con->query($query);

         header("Location: chat.php");    
             
        }


?>
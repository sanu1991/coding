<?php
$fastname = htmlspecialchars($_POST["fname"]);
$comment = htmlspecialchars($_POST["comment"]);
echo "Hi, $fastname. Your comment has been received successfully." . "";
echo "Here's the comment what you've entered: $comment";
?>
<?php
include_once '../repository/commentsRepository.php';
include_once '../models/comment.php';

if (isset($_POST['addComment'])) {
    if (
        empty($_POST['text'])
    ) {
        echo "Fill all fields!";
    } else {
        $text = $_POST['text'];
        $userID = $_POST['userID'];
        $discussionID = $_POST['discussionID'];
        $id = rand(100, 100000);
        $comment = new Comment($id, $text, $userID, $discussionID);
        $commentRepository = new CommentsRepository();
        $commentRepository->insertComment($comment, $discussionID);

    }

}
?>
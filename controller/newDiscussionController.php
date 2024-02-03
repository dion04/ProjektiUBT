<?php
include_once '../repository/discussionsRepository.php';
include_once '../models/discussion.php';

if (isset($_POST['createDisc'])) {
    if (
        empty($_POST['header']) ||
        empty($_POST['text']) ||
        empty($_POST['type'])
    ) {
        echo "Fill all fields!";
    } else {
        $header = $_POST['header'];
        $text = $_POST['text'];
        $type = $_POST['type'];
        $user = $_POST['user'];
        $id = rand(100, 100000);
        $disc = new Discussion($id, $header, $text, $type, $user);
        $discussionRepository = new DiscussionsRepository();
        $discussionRepository->insertDiscussion($disc);

    }

}
?>
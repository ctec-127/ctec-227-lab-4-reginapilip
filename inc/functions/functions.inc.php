<?php // functions.inc.php

// old move file
// function moveFile() {
//     // set needed variables
//     $tmp_file = $_FILES['file_upload']['tmp_name'];
//     $upload_dir = 'uploads';
//     $target_file = basename($_FILES['file_upload']['name']);
//     // move file from tmp dir to perm dir
//     move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file);
// }

function moveFile() {
    // set needed variables
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $upload_dir = 'uploads/' . $_SESSION['username'];
    $target_file = basename($_FILES['file_upload']['name']);
    // move file from tmp dir to perm dir
    move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file);
}

function blockUser() {
    if (!isset($_SESSION['loggedin'])) {
        header("location: login.php");
    }
}

?>
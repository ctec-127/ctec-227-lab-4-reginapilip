<?php // process-form.php

// add error handling

function moveFile() {
    // set needed variables
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $upload_dir = 'uploads';
    $target_file = basename($_FILES['file_upload']['name']);
    // move file from tmp dir to perm dir
    move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file);
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (is_dir('uploads')) {
        moveFile();
    } else {
        $upload_dir = mkdir('uploads');
        moveFile();
    }
} 

?>
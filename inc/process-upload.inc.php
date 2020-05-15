<?php // process-upload-form.inc.php
require_once 'inc/functions/functions.inc.php';

// add error handling


// do i need to check to see if uploads folder exists, if not, create it, since users are stored in uploads?
// if($_SERVER['REQUEST_METHOD'] == "POST") {
//     if (is_dir('uploads')) {
//         moveFile();
//     } else {
//         $upload_dir = mkdir('uploads');
//         moveFile();
//     }
// } 

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (is_dir('uploads' . $_SESSION['username'])) {
        moveFile();
    } else {
        $upload_dir = mkdir('uploads' . $_SESSION['username']);
        moveFile();
    }
} 

?>
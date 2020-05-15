<?php // functions.inc.php


// new move file
function moveFile() {
    // check if file already exists and 
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $upload_dir = 'uploads/' . $_SESSION['username'];
    $target_file = basename($_FILES['file_upload']['name']);
    // $newFileName = 1;

    // check if file exists 
    // if (file_exists($tmp_file)) {
    //     $tmp_file = $newFileName++ . $tmp_file;
    //     move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file);
    // } else {
    //     move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file);
    // }

    // move file from tmp dir to perm dir
    move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file);
}

function showMessage() {
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        // see functions.inc.php for bootstrap classes to add
        // echo '<div>';
        // echo $message;
        // echo '</div>';
    }
}

// deletes a file
function deleteFile() {
    $newFileName = 1;
    // if return from rename() == true
    if (rename("uploads/" . $_SESSION['username'] . "/" . $_GET['file'], "deletes/" . $newFileName++ . "-" . $_GET['file'])) {
        // echo "File deleted successfully.";
        // message not showing? 
        header('Location: gallery.php?message=Successfully Deleted');
    } else {
        header('Location: gallery.php?message=Something went wrong');
    }
    // showMessage();
}

?>
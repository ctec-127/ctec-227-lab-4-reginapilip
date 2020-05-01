<?php //delete.php

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
    if (rename("uploads/" . $_GET['file'], "deletes/" . $newFileName++ . "-" . $_GET['file'])) {
        // echo "File deleted successfully.";
        // message not showing? 
        header('Location: gallery.php?message=Successfully Deleted');
    } else {
        header('Location: gallery.php?message=Something went wrong');
    }
    // showMessage();
}

if (isset($_GET['file'])) {
    // create a backups folder (see code for making the uploads dir)
    if (is_dir('deletes')) {
        deleteFile();
    } else {
        $delete_dir = mkdir('deletes');
        deleteFile();
    }
}   

?>
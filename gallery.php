<?php // gallery.php
session_start();
$pageTitle = "Build Your Gallery";

// block unauthorized users
require_once 'inc/functions/functions.inc.php';
// blockUser();

// header
// session start here - rn it is in header
require_once "inc/layout/header.inc.php";
// app usage instructions
require_once "inc/layout/instructions.inc.php";
// upload form 
require_once "inc/upload-form.php";
// a place to display images uploaded
echo "<div class=\"gallery-container\">";
    require_once "inc/display-img.php";
echo "</div>";   
// delete functionality
require_once "delete.php";
// footer
require_once "inc/layout/footer.inc.php";
?>
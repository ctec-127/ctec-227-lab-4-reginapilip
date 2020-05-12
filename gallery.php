<?php // gallery.php
$pageTitle = "Build Your Gallery";
// header
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
<?php require_once "inc/layout/header.inc.php" ?>

    <header class="site-header">
        <div class="logo">
            <img src="img/upload-logo.png" alt="Upload logo" >
        </div>
        <div class="motto">
            <h1>Build Your Gallery</h1>
        </div>
    </header>

    <div class="instructions">
        <h1>What to do...</h1>
        <ul>
            <li><span class="instructions__steps">> Step 1:</span>First, <b>click "Choose a Photo"</b></li>
            <li><span class="instructions__steps">>> Step 2:</span><b>Find a photo</b> you want to upload, and select it</li>
            <li><span class="instructions__steps">>>> Step 3:</span>Finally, <b>click "Upload"</b>, and you'll find your photo below</li>
        </ul>
        
    </div>

    <?php 
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
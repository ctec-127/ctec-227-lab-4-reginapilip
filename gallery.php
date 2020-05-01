<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload | Build Your Gallery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/trash-icon.css">
</head>
<body>
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
    <!-- form to upload -->
    <?php require_once "inc/upload-form.php" ?>

    <!-- place to display images uploaded -->
    <div class="gallery-container">
        <?php require_once "inc/display-img.php" ?>
    </div>

    <!-- delete functionality below each image -->
    <?php require_once "delete.php" ?>

    <footer>
        <p>&copy; 2020</p> 
        <p>Created by <b>Regina Pilipchuk</b></p>
        
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
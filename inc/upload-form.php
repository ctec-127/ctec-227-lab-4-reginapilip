<?php // upload-form.php ?>

<?php require_once "inc/process-form.php" ?>

<div class="upload-form">
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
        <input type="file" id="file-upload" name="file_upload">
        <label class="upload-form-label for="file-upload">Choose a Photo</label>
        <button type="submit" class="upload-form-btn btn btn-info" name="submit" value="Upload">Upload</button>
    </form>
</div>



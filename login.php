<?php // login.php
$pageTitle = "Login";
require_once 'inc/layout/header.inc.php';
require_once 'inc/process-login.inc.php';

// checking if referred from registration page
// echo basename($_SERVER['HTTP_REFERER']);
if (isset($_SERVER['HTTP_REFERER']) && basename($_SERVER['HTTP_REFERER']) == 'welcome.php') {
    // build message
    echo '<p class="referrer-note">Account successfully created. Please login now.</p>';
}
?>

<!-- login form -->
<form action="inc/process-login.inc.php" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" id="username" required name="username">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" id="password" required name="password">
    </div>

    <div class="form-group">
        <button class="btn btn-info" type="submit">Log In</button>
    </div>
</form>

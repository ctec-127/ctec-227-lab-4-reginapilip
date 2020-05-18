<?php // welcome.php
$pageTitle = "Register";
require_once "inc/layout/header.inc.php";
?>

<div class="app-registration">
    <!-- form for registration -->
    <!-- form processed on process-register.inc.php -->
    <div class="registration-form-container">
        <div data-errors></div>
        <form action="inc/process-register.inc.php" method="POST" id="registration-form">
            <div class="form-group">
            <label for="first_name">First Name</label>
            <input class="form-control" type="text" id="first_name" required name="first_name"></div>
            
            <div class="form-group">
            <label for="last_name">Last Name</label>
            <input class="form-control" type="text" id="last_name" required name="last_name">
            </div>

            <div class="form-group">
            <label for="username">Username</label>
            <span [data-username]>Choose another username - only letters allowed</span>
            <input class="form-control registration-username" type="text" id="username" required name="username">
            </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" id="email" required name="email">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" id="password" required name="password">
            </div>
            
            <div class="form-group">
            <button class="btn btn-info" type="submit">Register</button>
            </div>
        </form>
    </div>
        <div class="account-links">
            <button class="btn btn-info"><a href="login.php" id="login">Login</a></button>  
        </div>

</div>

<?php require_once "inc/layout/footer.inc.php" ?>
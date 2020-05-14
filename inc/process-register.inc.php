<?php // register.php
// this processes the register form on welcome.php
$pageTitle = "Welcome!";
// require_once 'layout/header.inc.php';
require_once 'db/db_connect.inc.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // assign variable names to superglobal's returned values
    $firstName = $db->real_escape_string($_POST['first_name']);
    $lastName = $db->real_escape_string($_POST['last_name']);
    $username = $db->real_escape_string($_POST['username']);
    $email = $db->real_escape_string($_POST['email']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    // construct the sql query using variable values to insert form's posted values into the database
    $sql = "INSERT INTO user (
                first_name,
                last_name,
                username,
                email,
                password)
            VALUES (
                '$firstName',
                '$lastName',
                '$username',
                '$email',
                '$password')";
    
    echo $sql;

    // query the db
    $result = $db->query($sql);

    // error handling
    if (!$result) {
        echo $db->error . "<br>";
        echo "<div>
                <h1>There was a problem registering your account. Try again.</h1>
              </div>";
    } else {
        // redirect user to login page with a message on the page, asking them to login and that their account creation was successful
        // echo "<div class=\"container\">
        //         <div class=\"row\">
        //             <div class=\"col-12\">
        //             <h1>You're good to go! Now, log in please.</h1>
        //             <button class=\"btn btn-info\"><a href=\"../login.php\" id=\"login\">Login</a></button>
        //         </div>
        //       </div>
        //     </div>";
        header("Location: ../login.php");
    }
}

// require_once 'layout/footer.inc.php';

?>
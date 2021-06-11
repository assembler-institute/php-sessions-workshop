<?php
// Start session
session_start();

// Get form input values
$email = $_POST["email"];
$pass = $_POST["pass"];

// Now we should look for this values in a database
// Instead we'll use static vars
$emailDb = "imassembler@assemblerschool.com";
$passDb = "Assemb13r";

// Password must be encrypted in any way
$passDbEnc = password_hash($passDb, PASSWORD_DEFAULT);

// check if email and password are correct
if ($email == $emailDb && password_verify($pass, $passDbEnc)) {
    // we usually save in a session variable user id and other user data like name, surname....
    $_SESSION['email'] = $email;

    // when we check that the email and password is correct, we redirect the user to the dashboard 
    header("Location:../dashboard.php");
} else {
    $_SESSION["loginError"] = "Wrong email or password!";
    header("Location:../index.php");
}

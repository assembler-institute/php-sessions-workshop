<?php
session_start();

define("user", ["userName" => "admin", "password" => "admin"]);

if (isset($_SESSION['userName'])) {
    $url = '../resources/views/panel.php';
    header('Location: ' . $url);
    exit();
} else if (isset($_POST['userName']) && isset($_POST['password'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if ($userName === user["userName"] && $password === user["password"]) {
        $_SESSION['password'] = $password;
        $_SESSION['userName'] = $userName;
        $url = '../resources/views/panel.php';
        header('Location: ' . $url);
    } else {

        define("ERRORMSG", '<script language="javascript"> alert("Incorrect user or password");</script>');
        setcookie("IncorrectLoginCookie", ERRORMSG, time() + 1, "/");
        header('Location: ../public/index.php ');
        exit();
    }

    exit();
};

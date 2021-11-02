<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../resources/styles.css">
</head>


<body>
    <div id="header" class="header">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h1>PHP CHEAT SHEET</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h2>Login!!</h2>
                </div>
                <div class="info">

                    <form method="post" id="form" action="../app/validate.php">

                        <h4>User Name</h4>
                        <input type="text" id="userName" name="userName" required>
                        <h4>Password</h4>
                        <input type="password" id="password" name="password" required>

                        <div>
                            <input class="btn" type="submit" value="Login">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
<?php
session_start();
if (isset($_COOKIE["NotLoggedCookie"])) {
    echo $_COOKIE["NotLoggedCookie"];
    unset($_COOKIE['NotLoggedCookie']);
    setcookie('NotLoggedCookie', null, -1, '/');
} else if (isset($_COOKIE["IncorrectLoginCookie"])) {
    echo $_COOKIE["IncorrectLoginCookie"];
    unset($_COOKIE['IncorrectLoginCookie']);
    setcookie('IncorrectLoginCookie', null, -1, '/');
}
?>

</html>
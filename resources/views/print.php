<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<?php
$textOne = 'This is using "echo"' . '<br />';
$textTwo = 'This is using "print"' . '<br />';
$textThree = ['This ', 'is ', 'using ', '"print_r" '];
?>

<?php
session_start();

if (!isset($_SESSION['userName'])) {
    header('Location: ../../public/index.php ');
    define("ERRORMSG", '<script language="javascript"> alert("This is a private section, please login");</script>');
    setcookie("NotLoggedCookie", ERRORMSG, time() + 1, "/");
    exit();
};
$userName = $_SESSION['userName'];
?>

<body>
    <div id="header" class="header">
        <div id="userlogin" class="userlogin">
            <div id="box" class="box">
                <div class="info">
                    <?php
                    echo $userName;
                    ?>
                </div>
                <div>

                    <form method="post" id="form" action="../../app/close_session.php">
                        <input class="btn" type="submit" value='Logout'>
                    </form>

                </div>
            </div>
        </div>
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h1>PRINTS</h1>
                </div>
                <a href="panel.php" class="item">
                    🏠
                </a>
                <a href="iterators.php" class="item">
                    ITERATORS
                </a>
                <a href="operators.php" class="item">
                    OPERATORS
                </a>
                <a href="dates.php" class="item">
                    DATES
                </a>
                <a href="conditionals.php" class="item">
                    CONDITIONALS
                </a>
                <a href="types.php" class="item">
                    TYPES
                </a>
                <a href="maths.php" class="item">
                    MATHS
                </a>
                <a href="strings.php" class="item">
                    STRINGS
                </a>
                <a href="arrays.php" class="item">
                    ARRAYS
                </a>
                <a href="functions.php" class="item">
                    FUNCTIONS
                </a>
                <a href="info.php" class="item">
                    PHP-INFO
                </a>
            </div>
        </div>
    </div>
    <div class="main">
        <div id="flex" class="flex">
            <div id="box" class="box">
                <div class="title">
                    <h2>Echo</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'CODE=>"echo $textOne;"';
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo  $textOne;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Print</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        print 'CODE=>"print $textTwo;"';
                        ?>
                    </h3>
                    <p>
                        <?php
                        print $textTwo;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Print_r</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'CODE=>"print_r($textThree);"';
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo '<pre>';
                        print_r($textThree);
                        echo '</pre>';
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
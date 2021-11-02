<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterators</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<?php
$br = '<br/>';
$number = 5;
$numberTwo = 1;
$letters = ['q', 'w', 'e', 'r', 't', 'y'];
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
                    <h1>ITERATORS</h1>
                </div>
                <a href="panel.php" class="item">
                    🏠
                </a>
                <a href="print.php" class="item">
                    PRINTS
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
                    <h2>For</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'for ($i = 0; $i < $number; $i++) {' . $br;
                        echo 'echo "Loop number" . $i;' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        for ($i = 0; $i < $number; $i++) {
                            echo 'Loop number' . $i  . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Foreach</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'foreach ($letters as $l) {' . $br;
                        print ' echo "Letra " . $l  . ".";' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        foreach ($letters as $l) {
                            echo 'Letra ' . $l  . '<br/>';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>While</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'while ($number > 0) {' . $br;
                        echo 'echo "Decrement count " . $number' . $br;
                        echo '$number--;' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        for ($i = 0; $i < $number; $i++) {
                            echo 'Loop number' . $i  . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>For</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'do {' . $br;
                        echo 'echo "Decrement count ". $number;' . $br;
                        echo '$number--;' . $br;
                        echo ' } while ($number >= 0);';
                        ?>
                    </h3>
                    <p>
                        <?php
                        do {
                            echo 'Decrement count ' . $number  . '<br />';
                            $number--;
                        } while ($number >= 0);
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
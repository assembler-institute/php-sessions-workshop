<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<?php
$br = '<br/>';
$mathOperators = ["+", "-", "*", "/", "%"];
$comparisionOperators = ['==', '!=', '<', '>', '<=', '>='];
$logicalOperators = ['&&', ' And ', '||', ' Or ', '!', ' Xor '];

function numbers($a = 0, $b = 100)
{
    $n = random_int($a, $b);
    return strval($n);
};
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
                    <h1>OPERATORS</h1>
                </div>
                <a href="panel.php" class="item">
                    🏠
                </a>
                <a href="print.php" class="item">
                    PRINTS
                </a>
                <a href="iterators.php" class="item">
                    ITERATORS
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
                    <h2>Math Operators</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'foreach ($mathOperators as $op) {' . $br;
                        echo '$str = numbers() . $op . numbers();' . $br;
                        echo 'eval("$result=" . $str . ";") ;' . $br;
                        echo 'echo numbers() . $op .' . $br;
                        echo ' numbers() ." = " . $result' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        foreach ($mathOperators as $op) {
                            $str = numbers() . $op . numbers();

                            eval('$result=' . $str . ';');
                            echo numbers() . $op . numbers() . ' = ' .  $result . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Comparision Operators</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'foreach ($comparisionOperators as $op) {' . $br;
                        echo '$str = numbers() . $op . numbers();' . $br;
                        echo 'eval("$result=" . $str . ";") ;' . $br;
                        echo 'echo numbers() . $op . numbers() .' . $br;
                        echo '" => " .  ($result == 1 ? "true" : "false")' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        foreach ($comparisionOperators as $op) {
                            $str = numbers() . $op . numbers();

                            eval('$result=' . $str . ';');
                            echo numbers() . $op . numbers() . ' => ' .  ($result == 1 ? 'true' : 'false') . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Logical Operators</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'foreach ($logicalOperators as $op) {' . $br;
                        echo '$op === "!" ? $str = $op . numbers() :' . $br;
                        echo ' $str = numbers() . $op . numbers();' . $br;
                        echo ' eval("$result=" . $str . ";");' . $br;
                        echo 'echo numbers() . $op . numbers() . " => "' . $br;
                        echo '.  ($result == 1 ? "true" : "false")  . ' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        foreach ($logicalOperators as $op) {
                            $op === '!' ? $str = $op . numbers() :
                                $str = numbers() . $op . numbers();

                            eval('$result=' . $str . ';');
                            echo numbers() . $op . numbers() . ' => ' .  ($result == 1 ? 'true' : 'false')  . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
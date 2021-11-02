<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<?php
$br = "<br/>";
$todayDay = date('d');
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
                    <h1>CONDITIONALS</h1>
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
                <a href="operators.php" class="item">
                    OPERATORS
                </a>
                <a href="dates.php" class="item">
                    DATES
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
                    <h2>Simple condition 1</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo date("l") == "Monday" ? "We are on Monday" :' . $br;
                        echo '"Today is not Monday";' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo date('l') == 'Monday' ? 'We are on Monday' : 'Today is not Monday' . '<br />';
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Simple condition 2</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo ' echo date("F") == "October" ? "We are in October" :' . $br;
                        echo '"We are not in October";' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo date('F') == 'October' ? 'We are in October' : 'We are not in October' . $br;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Double Condirion</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo (date("i") <= "10" ? ' . $br;
                        echo '"the current minute is less than 10" :' . $br;
                        echo ' date("i") >= "15") ?' . $br;
                        echo '"the current minute is more than 15" :' . $br;
                        echo '"does not meet any conditions" ;' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo (date('i') <= '10' ? 'the current minute is less than 10' :  date('i') >= '15') ? 'the current minute is more than 15' : 'does not meet any conditions';
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Switch</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'switch ($todayDay) {' . $br;
                        echo '  case "1":' . $br;
                        echo '      echo "its the first day";' . $br;
                        echo '      break;' . $br;
                        echo '  case "30":' . $br;
                        echo '      echo "bye?";' . $br;
                        echo '      break;' . $br;
                        echo '  case "31":' . $br;
                        echo '      echo "bye bye";' . $br;
                        echo '      break;' . $br;
                        echo '  default:' . $br;
                        echo '      echo "May be another day";' . $br;

                        ?>
                    </h3>
                    <p>
                        <?php
                        switch ($todayDay) {
                            case '1':
                                echo "it's the first day" . '<br />';
                                break;
                            case '30':
                                echo "bye?" . '<br />';
                                break;
                            case '31':
                                echo "bye bye" . '<br />';
                                break;
                            default:
                                echo "May be another day" . '<br />';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
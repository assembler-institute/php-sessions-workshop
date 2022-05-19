<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<?php
$br = '<br />';
$textOne = 'This is  a text string that interpret variables' . $br;
$textTwo = 'This is using "echo"' . $br;
$textThree = 'The length of this is ';
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
                    <h1>STRINGS</h1>
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
                <a href="conditionals.php" class="item">
                    CONDITIONALS
                </a>
                <a href="types.php" class="item">
                    TYPES
                </a>
                <a href="maths.php" class="item">
                    MATHS
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
                    <h2>Replace</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo str_replace("echo", "str_replace", $textTwo);' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo str_replace("echo", "str_replace", $textTwo) . $br;
                        ?>
                    </p>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo str_ireplace("ECHO", "str_ireplace", $textTwo);' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo str_ireplace("ECHO", "str_ireplace", $textTwo);
                        ?>
                    </p>
                </div>

            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Uppercase/Lowercase</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo strtoupper(str_replace("echo", "strtoupper", $textTwo));' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo strtoupper(str_replace("echo", "strtoupper", $textTwo)) . $br;
                        ?>
                    </p>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo strtolower(str_replace("echo", "strtolower", $textTwo));' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo strtolower(str_replace("echo", "strtolower", $textTwo));
                        ?>
                    </p>
                </div>

            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Repeat</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo str_repeat(str_replace("echo", "str_repeat", $textTwo), 3)' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo str_repeat(str_replace("echo", "str_repeat", $textTwo), 3);
                        ?>
                    </p>
                </div>
                <div class="title">
                    <h2>Length</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'echo $textThree . (strlen($textThree) + 2)' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        echo $textThree . (strlen($textThree) + 2);
                        ?>
                    </p>
                </div>
            </div>

            <div id="box" class="box">
                <div class="title">
                    <h2>Find Char</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo '$chars = str_split(str_replace(" ", "", $textThree));' . $br;
                        echo '$charsNumber = numbers(1, count($chars) - 1);' . $br;
                        echo '$selectChar = $chars[$charsNumber];' . $br;
                        echo 'echo "Find "" . $selectChar . "" in the next string => "" .' . $br;
                        echo '$textThree . "" => . stripos($textThree, $selectChar);' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        $chars = str_split(str_replace(' ', '', $textThree));
                        $charsNumber = numbers(1, count($chars) - 1);
                        $selectChar = $chars[$charsNumber];
                        echo 'Find "' . $selectChar . '" in the next string => "' . $textThree . '" =>'
                            . stripos($textThree, $selectChar) . $br;
                        ?>
                    </p>
                </div>
            </div>
            <div id="box" class="box">
                <div class="title">
                    <h2>Find Substring</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo '$list = explode(" ", rtrim($textThree));' . $br;
                        echo '$wordsNumber = numbers(1, count($list) - 1);' . $br;
                        echo 'echo  """ . $list[$wordsNumber] . "" is the word number " . $wordsNumber + 1, "/" . " of the string => "" . $textThree . """' . $br;
                        ?>
                    </h3>
                    <p>
                        <?php
                        $list = explode(" ", rtrim($textThree));
                        $wordsNumber = numbers(1, count($list) - 1);
                        echo  '"' . $list[$wordsNumber] . '" is the word number ' . $wordsNumber + 1, "/" . ' of the string => "' . $textThree . '"' . $br;
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
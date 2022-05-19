<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<?php
$br = "<br/>";
$types = [
    'boolean' => true,
    'integer' => 7,
    'float' => 34.5,
    'string' => "WOLOLOOOOOO",
    'array' => ['This text is inside of an array'],
    'NULL' => null
];

class objectVariable
{
    public $text = 'this text is inside an object';
}
$object = new objectVariable();
$objectParam = 'text';
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
                    <h1>TYPES</h1>
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
                    <h2>Types</h2>
                </div>
                <div class="info">
                    <h3>
                        <?php
                        echo 'foreach ($types as $key => $value) {' . $br;
                        echo 'echo gettype($value) === "array" ?  "$" . $key . " = " . $value[0] . " is " . gettype($value)  :' . $br;
                        echo '"$" . $key . " = " . $value . " => " . gettype($value) ;' . $br;
                        echo '}';
                        ?>
                    </h3>
                    <p>
                        <?php
                        foreach ($types as $key => $value) {
                            echo gettype($value) === 'array' ?  '$' . $key . ' = ' . $value[0] . ' is ' . gettype($value)  . '<br/>' :
                                '$' . $key . ' = ' . $value . ' => ' . gettype($value) . '<br/>';
                        }

                        echo $object->$objectParam . ', and the variable $object is ' . gettype($object) . '<br />';

                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
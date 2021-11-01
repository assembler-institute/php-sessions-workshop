<?php

# get data from index login form
# info available in http request header

# start session to create cookie with unique ID
# email and pass will be storage there
#
session_start();

$_SESSION['desc']="Im the session file";


var_dump($_SESSION);

# var_dump(session_save_path());

# 1:{email: xxxx@zzzz.com, pass: aaaa}

# [bdd]=[number1=>{email: xxxx@zzzz.com, pass: aaaa}, number2 => {{email: xxxx@zzzz.com, pass: bbbb}}.... numbern => {}]
# quiero haer el POST de todo el form

# $_SESSION['email']=$_POST('email');
# $_SESSION['pass']=$_POST('password');

# function alg(){};

# $_SESSION['userId']= alg('email', 'pass');

# alg (email, pass) = number

# getUserData ($_SESSION['userId']) #se ejecute en el server



$filee=file("/Applications/XAMPP/xamppfiles/htdocs/php-sessions-workshop/workshop/bdd.php");

#print_r($filee);

echo "<h1>HEY</h1>";

print_r($filee);

echo "</br>";

echo "</br>";
echo $filee[1];

# $arrayNew=eval($filee[1]);
echo "</br>";
eval($filee[1]);

var_dump(($users));





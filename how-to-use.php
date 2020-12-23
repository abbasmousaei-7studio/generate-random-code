<?php

// Author: Abbas Mousaei
// Email: Abbasmousaei.7studio@gmail.com
// Company: https://www.7studio.ir

// How to use
require_once './generate-random-code.php';

$randomString = generate_string(21);
echo 'The random string is:'.$randomString;
echo '<br />';

$randomNumber = generate_number(12);
echo 'The random number is: '.$randomNumber;

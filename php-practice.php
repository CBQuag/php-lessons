<?php

$message = "bringus brungussy";

// echo $message;

$pi = 3.14;

$pi *= 3;

// boolean uses 'and'/'&&' 'or'/'||' and 'xor' for comparisons

//strings use typical formatting, \n and all typical escape characters. echo "hello" . $name;
//echo "yeah i think $thought";
// echo "I am {$action}";

$arr = [
    "frst" => "yuh",
    "blurst" => "gruh"
];

$bob = [
    'name' => 'bob',
    'age' => 20
];
$sally = [
    'name' => 'sally',
    'age' => 32
];
$people = [$bob, $sally];
echo $people[0]['age'];

var_dump($message, $pi);
var_dump($arr["blurst"]);


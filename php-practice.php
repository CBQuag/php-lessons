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

$people_single = [
    'sally' => ['name' => 'sally', 'age' => 32],
    'bob' => ['name' => 'bob', 'age' => 20]
];

//if you arbitrarily add ... 3=>'whatever', then the array continues from that index
//ignoring the count
echo $people_single['sally']['name'];
echo '</br>';

//kinda works like objects

foreach ($people_single as $p) {
    echo $p['name'] . '</br>';
}

//using index
foreach ($people_single as $key => $p) {
    echo $key . '-' . $p['age'] . '</br>';
}

$arr1 = [];
if (empty ($arr1))
    echo "arr1 is empty";
echo '</br>';

var_dump($message, $pi);
echo '</br>';
var_dump($arr["blurst"]);
echo '</br>';

$month = 1;
while ($month <= 12) {
    echo $month;
    echo '</br>';
    $month++;
}
for ($x = 0; $x <= 5; $x++) {
    echo $x;
}
echo '</br>';

$day = 'tue';

switch ($day) {
    case 'mon':
        echo 'its monday';
        break;
    case 'tue':
        echo 'its tuesday';
        break;
    default:
        echo 'not a day';
        break;
}

//without breaks, switches run everything past the true condition
echo '</br>';

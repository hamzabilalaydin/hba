<?php

$title = 'Hello World';

// require 'index.php';


$hours = 173;
$rate = 100;
$payout = $hours * $rate; // payout calculation
$payout = $hours * $rate; # payout calculation

/*
asdas
asdasd
ad12
*/

# ARRAY #

$carts = [ 'laptop', 'mouse', 'keyboard' ];

$carts2 = "laptop";
$carts2 = "mouse";

$prices = [
   'laptop' => 1000,
   'mouse' => 50,
   'keyboard' => 120
];


echo $prices['laptop'];

# BOOLEAN #

$is_submitted = false;
$is_valid = true;


# INT #

// 1_000_000 = 1000000

# STRING #

$ad = "Hamza";
$soyad = "Aydin";

$ADI = $ad . $soyad;

$a = 5;

$b = 7;

$c = $a . $b . $ad; // 57Hamza

$c = $a + $b; //12




$he = 'Bob';
$she = 'Alice';

$text = "$he said, \"PHP is awesome\".
\"Of course.\" $she agreed.";

echo $text;


# HEREDOC STYLE #

$text = <<<TEXT
$he said "PHP is awesome".
"Of course" $she agreed."
TEXT;

# ASSIGMENTS #

$counter = 1;
$counter = $counter + 1;
$counter += 1;


// concatenation

$greeting = 'Hello ';
$name = 'John';

$greeting = $greeting . $name;

echo $greeting;
// Hello John


# IF STATEMENT #
/*
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP if Statement Demo</title>
</head>
<body>
  <?php $is_admin = true; ?>
  <?php if ( $is_admin ) : ?>
  <a href="#">Edit</a>
  <?php endif; ?>
  <a href="#">View</a> 
</body>
</html>
*/

########## SWITCH CASE ##########

// WITH IF

$role = 'subscriber';
$message = '';

if ('admin' === $role) {
	$message = 'Welcome, admin!';
} elseif ('editor' === $role) {
	$message = 'Welcome! You have some pending articles to edit';
} elseif ('author' === $role) {
	$message = 'Welcome! Do you want to publish the draft article?';
} elseif ('subscriber' === $role) {
	$message = 'Welcome! Check out some new articles.';
} else {
	$message = 'Sorry! You are not authorized to access this page';
}

echo $message;

########################################################

//WITH SWITCH

$role = 'admin';
$message = '';

switch ($role) {
	case 'admin':
		$message = 'Welcome, admin!';
		break;
	case 'editor':
		$message = 'Welcome! You have some pending articles to edit';
		break;
	case 'author':
		$message = 'Welcome! Do you want to publish the draft article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;
	default:
		$message = 'You are not authorized to access this page';
}

echo $message;

# FOR LOOP #

$total = 0;

for ($i = 1; $i <= 10; $i++) {
	$total += $i;
}

echo $total;


# WHILE LOOP #

$total = 0;
$number = 1;

while ($number <= 10) {
	$total += $number;
	$number++;
}

echo $total;


# DO WHILE #

$i = 10;

do {
    echo $i  . '<br>';
    $i--;
} while ($i > 0);


# FOREACH #

$colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {
	echo $color . '<br>';
}


# BREAK #

for ($i = 0; $i < 10; $i++) {
	if ($i === 5) {
		break;
	}
	echo "$i\n";
}   
// 0 1 2 3 4


$j = 0;
do {
	if ($j === 5) {
		break;
	}
	echo "$j\n";
	$j++;
} while ($j <= 10);
// 0 1 2 3 4


# CONTINUE #


for ($i = 0; $i < 10; $i++) {
	if ($i % 2 === 0) {
		continue;
	}
	echo "$i\n";
}
// 1 3 5 7 9


# FUNCTIONS #

function welcome_user($username)
{
	echo 'Welcome ' . $username;
}


function concat($str1, $str2, $delimiter = ' ')
{
    return $str1 . $delimiter . $str2;
}

echo "<br>";
$message = concat('Hi', 'there!');

echo $message;
echo "<br>";



# GLOBAL SCOPE #


$message = 'Hello';

function say()
{
	$message = 'Hi';
	echo $message;
}

echo $message; // Hello
echo "<br>";


$message = 'Hello';

function sayar()
{
	global $message;
	echo $message; // Hello
}

sayar();
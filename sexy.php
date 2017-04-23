<?php // test1.php
$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;


//$kolay = array('hello','php','it','seems','fun');
/*$ox = array(array('x','x','x'),
	array('x','x','x'),
	array('x','x','x'));
echo $ox[1][2];
*/
echo '<br></br>';
$add = 25;
echo ++$add;
echo '<br></br>';


$html = "i love progamming";

echo "<h1>Hello i want to say</h1> ".$html;

$var = "<h3>I want to say i get deppresed sometime</h3>";

$var .= $html;

echo $var;

$mixup = $var." ".$html;

echo $mixup;

echo '<br></br>';

$str = 'hello string';

echo '$str'.'<br></br>';

echo "$str";

echo '<br></br>';

$text = 'If you are good at something never do it for free 

                -Mr Hola';

                echo $text;
//php heredocs
                echo<<<_suck
                hola
                shit
                hit the 
                fan.
_suck;
echo '<br></br>';
$cal = 556 * 655;
echo substr($cal, 2);
//php constants
echo '<br></br>';
define('welcome', 'Welcome to our website thank you for visting us we are greatful to you');
$welcome = welcome;
echo $welcome;
// predefined constants
echo "This is line " . __LINE__ . " of file " . __FILE__ . 'in the'.__DIR__;

//function
function longDate($timestamp)
{
	return date('l F jS Y',$timestamp);
}
//static variable
/*	$num=0;
	echo $num;
	$num++
}
*/
//superglobal variables
$came_from = $_SERVER['http_referer'];

//sanitizing superglobal variables with html entities to be safe from hackers
$came_from = htmlentities($_SERVER['http_referer']);
//conditionals
echo 'a:('.true.')<br>';
$balance = 150;
$bank_balance = 0;
if($balance>100)
{
	$bank_balance += 150;
}
elseif ($balance>200) {
	# code...
	echo 'no need to worry';
}
else {
	echo 'take some rest API :)';
 }
?>
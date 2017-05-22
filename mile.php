<!--HTML Code-->
<!doctype html>
<html>
    <head>
    <style>
        body{
            background:deepskyblue;
            color:white;
            font-family:Arial;
        }
    </style>
    </head>
    <body></body>
</html>
<!--End-->


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
 };

 for ($i = 1, $j = 1 ; $i + $j < 10 ; $i++ , $j++)
{
echo 'hello world';
};
echo '<br>';
//php functuions predefined
echo strrev ('ola Koushik');
echo '<br>';
echo str_repeat('Buenos Noches ',5);
echo '<br>';
echo ucfirst(strtolower('KOushik Das My NAMe Is SHit'));

echo '<br>';
$a1 = 'WIILiam';
$a2 = 'biravine';
$a3 = 'HOlA';

echo $a1.' '.$a2.' '.$a3;
echo '<br>';
fix_names();
echo $a1.' '.$a2.' '.$a3;
function fix_names(){
    global $a1;$a1 = ucfirst(strtolower($a1));
     global $a2;$a2 = ucfirst(strtolower($a2));
     global $a3;$a3 = ucfirst(strtolower($a3));
};
/*
echo "<br>";
require_once 'library.php';
// your code goes here
echo '<br>';
*/
/**
 *
 */
$newclass = new ClassName;
print_r($newclass);
class ClassName
{
  public $sexy,$hot;
  function __construct($sexy,$hot)
  {
    # code...
    echo $sexy.' '.$hot;
  }
};

echo "<br>";
$object = new User;
print_r($object); echo "<br>";
$object->name = "Joe";
$object->password = "mypass";
print_r($object); echo "<br>";
$object->save_user();
class User
{
public $name, $password;
function save_user()
{
echo "Save User code goes here";
}
};

class example {
  private $ava,$ava2;
  static function kalane(){
    echo 'Hello Sexy Bitches Yes Bitch I Am Saying to you';
  };
  this.$ava = 'Kalabo Dhore';
  echo $sava;
};

?>

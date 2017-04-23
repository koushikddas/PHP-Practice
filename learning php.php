<?php

$chess = array (
array  ('bok ','chok ','kol ','tol '),
array ('lol ',' bol',' soul',' porn',' torn'),
array ( 'jol ',' sol',' mol',' sal')
);

echo "<pre>";
foreach($chess as $chesse)
{
	foreach ($chesse as $row)
		echo "$row";
		echo "<br>";
}
echo "</pre>";

$tm = explode ('  ', "this is  shit bitch");

print_r($tm);

$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";

$contact = compact ('fname','sname','planet','system','gridlock','constellation');

print_r($contact);


printf("hello number %b",5);

printf("<span style='color:#%X%X%X'>Hello</span>", 65, 127, 245 );

printf("the result is: %.5f", 7/3);



printf("the result is %15.2f\n",123.54/13);
echo time() + 7*24*60*60;
echo mktime(0,0,0,1,1,2005);
?>
<?php
echo date("l F jS, Y - g:ia", time());

"<pre>";
$fh = fopen("textfile.txt","w") or die("failed to create a file");
$text = <<<_END
line 1
line 2
line 3
_END;

fwrite($fh,$text) or die ("could not write a file");
fclose ($fh);
printf("<span style='color:deepskyblue'> file written succesfully</span>");

$write = fopen("text.txt","w") or die ("failed to create the file");

$text = <<<_END

helllo sexy
hi cutie
fucl you bitch
_END;

fwrite($write,$text) or die ("failed to erite to the file");
fclose($write);


copy('text.txt','copiedtext.txt') or die("failed to copy the file");

if(!rename('text.txt','text.css'))
	echo "file succesfully renamed";
else
	echo "file could not be renamed";

echo "<pre>";
file_get_contents("http://markmanson.net");
echo "</pre>";
	

?>

<?php

$fh = fopen('text.txt','r+');
$gets= fgets($fh);
if (flock($fh,LOCK_EX))
{
	fseek ($fh,0,SEEK_END);
	fwrite($fh,"$gets") or "die could not write a file";
	flock($fh,LOCK_UN);
}
fclose($fh);
echo "file written succesfully";
?>


echo <<<_END

<from method='post',action='upload.php>
file
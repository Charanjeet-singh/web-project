<?php
if (isset($_POST["name"])){
	$var=$_POST["name"];
}
else {
 $var=4;
}

$var3=6;
$var2="<html>
<head></head>
<body><h1>Hello from Charanjeet</h1>
<form action='http://localhost/index.php.php' method ='POST'>
<input type='text' name ='name'></input><br/>
<input type='submit' value='Submit'>
</form></body>
</html>";

echo $var;
echo $var2;

?>

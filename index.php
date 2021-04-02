<!-- <!DOCTYPE html>
<html>
<head>
	<title>Hello! Hello! Hello!</title>
</head>
<body>
	<form action="assignment.php" method="get">
		Your Full Name<input type="text" name="fullname">
		Your Friends Full Name<input type="text" name="friendsname">
		Your Enemys Name<input type="text" name="enemysname">
		<input type="Submit">
	</form> 
	<br>
</body> -->
<?php

// $a = $_GET["fullname"];
// $b = $_GET["friendsname"];
// $c = $_GET["enemysname"];

// $name1 = $a;
// $name2 = $b;
// $name3 = $c;

$name1 = "Adib Khan";
$name2 = "Apple Mahmud Ifty";
$name3 = "Abdullah Al Mamun";

$name1len = strlen($name1);
$name2len = strlen($name2);
$name3len = strlen($name3);

if ($name1len<$name2len && $name1len<$name3len) {
	echo "Shortest name is ".$name1."<br>";
	if ($name1len % 2 == 0) {
		echo "Character length is Even"."<br>";
	}else{
		echo "Character length is Odd"."<br>";
	}
}elseif ($name2len<$name1len && $name2len<$name3len) {
	echo "Shortest name is ".$name2."<br>";
	if ($name2len % 2 == 0) {
		echo "Character length is Even"."<br>";
	}else{
		echo "Character length is Odd"."<br>";
	}
}else{
	echo "Shortest name is ".$name3."<br>";
	if ($name3len % 2 == 0) {
		echo "Character length is Even"."<br>";
	}else{
		echo "Character length is Odd"."<br>";
	}
}

?>

</html>
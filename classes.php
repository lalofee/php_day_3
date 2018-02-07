<!DOCTYPE html>
<html>
<head>
       <title>classes</title>
</head>

<body>
        <h1></h1>

<?php
class User {
	var $ID;
	var $name;

	function printMe() {
		echo $this->ID . " " . $this->name;
	}
}

$susi = new User;
$susi->ID = 1;
$susi->name = "susi";
$susi->printMe();

$strolchi = new User;
$strolchi->ID = 2;
$strolchi->name = "strolchi";
$strolchi->printMe();


?>

</body>
</html>
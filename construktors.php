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

	function __construct($setid, $setname) {
		$this->ID = $setid;
		$this->name = $setname;
	}

	function printMe() {
		echo $this->ID . " " . $this->name;
	}
}

$susi = new User(1, "susi");
$susi->printMe();

$strolchi = new User(2, "strolchi");
$strolchi->printMe();


?>

</body>
</html>
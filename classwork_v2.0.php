<!DOCTYPE html>
<html>
<head>
<style>
body {
	background-color: pink;
}
h1 {
	text-align: center;
	color: rgb(51, 0, 0);
}
</style>
       <title>authors list</title>
</head>

<body>
        <h1>Diese Autoren werden von unserem Verlag publiziert</h1>


<?php
class Author {
	var $author_name;
	var $author_date_of_birth;
	var $author_language;

	function __construct($setauthor_name, $setauthor_date_of_birth, $setauthor_language) {
		$this->author_name = $setauthor_name;
		$this->author_date_of_birth = $setauthor_date_of_birth;
		$this->author_language = $setauthor_language;

	}

	function printMe() {
		echo "Name: " . $this->author_name . " Geburtstag: " . $this->author_date_of_birth . " Sprache: " . $this->author_language;
	}
}

$Daniel_Kehlmann = new Author("Daniel Kehlmann", "1985-02-12", "Deutsch");
$Daniel_Kehlmann->printMe();




?>

</body>
</html>
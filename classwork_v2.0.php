<!DOCTYPE html>
<html>
<head>
       <title>classes</title>
</head>

<body>
        <h1></h1>

<?php
class Author {
	var $author_name;
	var $author_date_of_birth;
	var $author_language;

	function printMe() {
		echo $this->author_name . " " . $this->author_date_of_birth . " " . $this->author_language;
	}
}

$Daniel_Kehlmann = new Author;
$Daniel_Kehlmann->author_name = "Daniel Kehlmann";
$Daniel_Kehlmann->author_date_of_birth = "1985-02-12";
$Daniel_Kehlmann->author_language = "Deutsch";
$Daniel_Kehlmann->printMe();




?>

</body>
</html>
<?php
	include("ParentClass.php");
	include("ChildClass.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<h3>Assignment 3</h3>
	<?php
		print "<p>Create a new parent object for a manga...<br></p>";
		$manga = new ParentClass("Fullmetal Alchemist", "Hiromu Arakawa", 1, "鋼の錬金術師", "荒川弘", "Adventure", "2001 - 2010");
		print "<p>Display the info of the new parent object<br></p>";
		$manga->display_manga_info();

		print "<br><p>Create a new child object for a manga...<br></p>";
		$manga2 = new ChildClass("Fullmetal Alchemist", "Hiromu Arakawa", 1, "鋼の錬金術師", "荒川弘", "Adventure", "2001 - 2010");
		print "<p>Display the info of the new child object<br></p>";
		$manga2->display_manga_info();

		print "<br><p>Make a copy of the original child object...<br></p>";
		$manga2_clone = clone $manga2;

		print "<br><p>Modify the child object...<br></p>";
		$manga2->modify_all_info("Haikyu!!", "Haruichi Furudate", 2, "ハイキュー！！", "古館春一", "Sports", "2012 - present");
		print "<p>Display the modified child object<br></p>";
		$manga2->display_manga_info();

		print "<br><p>Display the copy of original child object<br></p>";
		$manga2_clone->display_manga_info();

	?>
</body>
</html>

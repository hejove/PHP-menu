<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Menu</title>

<link rel="stylesheet" type="text/css" href="test.css">
</head>

<body>


<?php /*kommandoen $curpage er for at gøre det tydeligt i menuen hvilken underside man befinder sig på, så den aktive side er synlig*/
	 
	 $curpage = basename ($_SERVER['PHP_SELF']);
	 ?>
	 


<ul>
<i><a href="testPHP.php"<?php if ($curpage == 'testPHP.php') {echo 'class="active"';}?>>Side 1</a></i>
<i><a href="testPHP1.php" <?php if ($curpage == 'testPHP1.php') {echo 'class="active"';}?>>Side 2</a></i>
<i><a href="testPHP2.php"<?php if ($curpage == 'testPHP2.php') {echo 'class="active"';}?>>Side 3</a></i>
</ul>




</body>
</html>
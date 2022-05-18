<html>
	<head>
		<title> 2022 CAT-Security Study mentor </title>
	</head>
	<body>
		<form action="" method="POST">
			<div> 구구단: <input type="input" name = "num"> <input type = "submit"> </div>
		</form>
	</body>
</html>

<?php
	$i = 1 ;
	echo $_POST["num"]. "단". "<br>";	
	for ($i = 1; $i <10; $i++ ) {
		echo $i. "X". $_POST["num"]. "=" . $_POST["num"] * $i ."<br>"; 
	}
?>

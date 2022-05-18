<?php 	
	$id = $_POST['ied'];
	$pw = $_POST['pw'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$alert = 'Your IP: '.$_SERVER['REMOTE_ADDR'].' '.'your not admin';
	if ($_POST['ied'] === 'admin') {
		echo "<script> alert('$alert'); </script>";
	}
	else if ($id === 'taeo0209' and $pw === 'hello'){
		setcookie("myinfo", "$id", time() + (66));
		setcookie("mypw", "$pw", time() + (60));
	}
	else {
		if ($id != null) {
			echo 'wrong password!';
		}
	}


?>

<html>
	<head>
		<style>
			.alt {
				border: 1px solid black;
				width: 50px;
				height: 80px;
			}
		</style>
	</head>
	<body>
		<form method="POST" action="">
		<table class="alt">
			<tr>
				<td> CAT-LOGIN </td>
			</tr>
			<tr>
				<td> <input type ="id" name = "ied" /> </td>
			</tr>
			<tr>
				<td> <input type ="password" name = "pw" > </td>
			</tr>
			<tr>
				<td> <input type="submit" name= "mysubmit" value="입력" > </td>
			</tr>
		</table>
		</form>
	</body>
</html>
		

<html>
	<body>
		<form action="" method="POST">
			<div> 홀수 / 짝수 </div>
			<div> 시작: 
				<input type="input" name = "num">
				<input type="radio" name="iradio" value="radio1"/> 홀수
				<input type="radio" name="iradio" value="radio2"/> 짝수
				<input type="submit" name="ok"/> 
		</form>
				"<br>"
	</body>
</html>

<?php
	$save = 0;
	if ( $_POST["iradio"] === 'radio2') {
		echo '0';
		$i = 0;
		for ( $i = 0; $i <= $_POST["num"]; $i+=2) {
			echo '+'.$i; 
			$save += $i;	
		}
		echo "=".$save;	
	}
	else if ( $_POST["iradio"] === 'radio1') {
                $i = 1;
		echo 'i';
                for ( $i = 1; $i <= $_POST["num"]; $i+=2) {
			echo '+'.$i;
			$save += $i;
                }
                echo "=".$save;
        }

?>

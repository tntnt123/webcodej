<?php   

        $word = $_POST['wordall'].' '.$_POST['intext'];		
        $text = $_POST['intext'];					//input태그 입력받은단어
        $len = mb_strlen($_POST['wordall'], "UTF-8");			//hidden태그 길이구하기
        $last = mb_substr($_POST['wordall'], $len-1 , 1 );		//hidden태그 마지막 단어
        $first = mb_substr($text, 0 , 1);	
	if ($_POST['save'] === '저장') {				//input 태그 첫단어
  	    	setCookie("cookie", $word, time() + (60*10));
		$save = $_COOKIE['cookie'];
	}
	echo $save;
?>

<html>
	<head>
		<title> Last Word </title>
		<h1> 끝말을 이어봐요 </h1>
		<meta charest ="UTF-8">
		<style>
			body {
				background-image: url("https://previews.123rf.com/images/ingalinder/ingalinder1410/ingalinder141000079/32778733-%EB%85%B9%EC%83%89-%EC%B2%B4%ED%81%AC-%EB%AC%B4%EB%8A%AC-%ED%83%80%EC%9D%BC-%EB%B2%A1%ED%84%B0-%EB%B0%B0%EA%B2%BD-%EB%98%90%EB%8A%94-%EC%9B%90%ED%99%9C%ED%95%9C-%ED%8C%A8%ED%84%B4.jpg");
			}
			
			.inword { 
				border-radius: 30px;
				width: 500px;
				height: 100px;
				font-size: 30px;
				}
			.submit {
				border-radius: 50%;
				height: 100px;
				width: 100px;
				background-color: brown;
				}
		</style>
	</head>
	<body align="center">
		<div align="left"> <img src="https://t1.daumcdn.net/cfile/tistory/991DA64D5D07495A31"> </div>
		<form method="POST" action="">
			<input class="inword" type ="input" name="intext" autofocus placeholder="여기에 입력하세요"/>
			<input class="submit"  type ="submit" name="submit" /> 	
			<br> <br> <br>
			<?php
				if ($first != $last and $word != ' '.$text) {
					$word = null;
					$_POST['wordall'] = null;
					echo "<script> alert('실패!'); </script>";
				}
			 ?>
			<input type= "hidden" name= "wordall" value = "<?= $word; ?>" />
			<?php 	
				echo $word;
			?>
			<br> <br> <br>
			<input type ="button" name="save" value="저장" />
			<input type="button" name="load" value="불러오기"/>
		</form>
	</body>
</html>

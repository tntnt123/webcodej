<?php
        if ($_POST['inputnum'] === null ) {
                $randnum = mt_rand(100, 999);
                setcookie('firnum', $randnum, time() + 600);
        }

        $count = $_POST['count'] + 1;
        $inum = $_POST['inputnum'];
        $save = $_COOKIE['firnum'];
        $rnum1 = floor($save / 100);
        $rnum2 = floor(($save % 100) / 10);
        $rnum3 = floor($save % 10);

        $inum1 = floor($inum / 100);
        $inum2 = floor(($inum % 100) / 10);
        $inum3 = floor($inum % 10);
	echo $rnum1.$rnum2.$rnum3.$inum1.$inum2.$inum3."<br>";
	echo 'save = '.$save;
	if ($save === $inum and $count != 0) {
		echo "<script> alert('성공!'); </script>";
		$_POST['inputnum'] = 0;
                $count = 1;
                $randnum = mt_rand(100, 999);
                setcookie('firnum', $randnum, time() + 600);
	}
	else if ($count > 10 ) {
		echo "<script> alert('실패!'); </script>";
		$_POST['inputnum'] = 0;
		$count = 1;
		$randnum = mt_rand(100, 999);
		setcookie('firnum', $randnum, time() + 600);
	}
	else {
		if ($inum1 === $rnum1 or $inum2 === $rnum2) {
			$strk += 1;
		}
		if ($inum3 === $rnum3) {
			$strk += 1;
		}
		if($inum1 === $rnum2 or $inum1 === $rnum3) {
			$ball +=1;
		} 
		if($inum2 === $rnum1 or $inum2 === $rnum3) {
			$ball +=1;
		}
		if($inum3 === $rnum1 or $inum3 === $rnum2) {
			$ball +=1;
		}
		if($strk ===0 and $ball === 0)  {
			$out = 1;
			echo "<script> alert('out!!!'); </script>";
		}
	}
?>

<html>
	<head>
		<title> numbb </title>
		<style>
			body {
				background-image: url("https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAxODEyMDFfMjEg%2FMDAxNTQzNjU4NTY2NzA1.iUpQ1_wunW4NFzj418aRu1QC1DM8Wu8fnir_h-zImgkg.KcQpAoXoo1N1eUeMu6dFyqcTqak6FVGqxbSh6eG3yT0g.JPEG.foren00n%2F%25C7%25D1%25C8%25AD_%25BD%25D6%25BF%25C0.jpg&type=a340");
				background-repeat: no-repeat;
				background-size: 70%;
				background-position: center;  
			}	
			input {
				width: 300px;
				height: 50px;
				font-size: 20px;
			}
			.score {
				border: 1px solid black;
				width: 200px;
				height: 400px;
			}
			.batting {
				border: 1px solid black;
				width: 200px;
				height: 100px;
			}
			.update {
				border : 1px solid blue;
				width: 100px;				
			}
		</style>
	</head>
	<h1> 최강한화! </h1>
	<body align="center">
		<form method="POST" action="">
		<div>
			<input type="text" name= "inputnum" autofocus placeholder="숫자3개 ex)777"/>
			<button type="submit" name= "submit"> SWING ! </button> 
		</div>
		<table class="score" >
			<tr>
				<td> STRIKE !: </td> 
				<td> <?php echo $strk; ?> </td>
			</tr>
			<tr>
				<td> BALL !: </td> 
				<td> <?php echo $ball; ?> </td>
			</tr>
			<tr>
				<td> OUT !: </td>
				<td> <?php echo $out; ?>  </td>
			 </tr>
		</table>
		<table class="batting" align="right">
			<tr>
				<td> BATTING: </td>  
				<td  align="center"> 			
					<?php echo $_POST['inputnum'];  ?>
				</td>
			</tr>
			<tr>
				<td> COUNT: </td>
				<td> <input type="hidden" name="count" value="<?= $count; ?>" /> 
					<?php echo $count-1; ?>
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>

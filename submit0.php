<html>
	<head>
		<title> 회원가입폼 </title>
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
		<style>
			body {
				font-family: 'Nanum Pen Script', cursive;
			}
			input::placeholder {
				font-size: 10px;
			}
			.signup {
 		        border: 1px solid black;
			font-size:30px;
			}
			.select {
			border-radius: 10px;
			font-size:15px;
			background-color: rgb(225,223,223);
			}
			.input {
			border-radius: 5px;
			font-size:30px;
			border: 0.1px solid gray;
			}
			
		

		</style>

	</head>
	
	<body>
		<table align="center"  class="signup" float=left width="500px" height = "800px" name="mytable">
		<form method="POST" action="">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRRvIadSD6O3M-UmIEHwkLGgY6KO131TdLGA&usqp=CAU" width="300px" height="201px"   alt="로고">
			<tr>
				<td > 교정선택 </td>
			</tr>
			<tr>
				<td align="center"> 
					<input type="radio" name="iradio" value="radio1"/> 성심 
					<input type="radio" name="iradio" value="radio2"/> 성의 
					<input type="radio" name="iradio" value="radio2"/> 성신
				</td>
			</tr>
			<tr>
				<td  width="1px"> 입학일/ 계열 </td> 
			<tr>
				<td> <input type ="week" >
				<select class= "select" name="iselect"> 
				<option align = "center" value="20"> ICT 공학계열</option>
				<option value="20"> 공학 계열 </option>
				<option value="30"> 자연과학 계열 </option>
				<option value="30"> 경영 계열 </option>
				<option value="30"> 인문 계열 </option>
				<option value="30"> 졸업생 / 교직원 </option> 
				</td>
			</tr>
			<tr>
				<td> 닉네임(최대 8글자) </td>
			</tr>
			<tr>
				<td> <input class="input" placeholder="닉네임" type="text" autofocus maxlength="10" name="nickname" required> </td>
			</tr>
			<tr>
				<td> 아이디 </td>
			</tr>
			<tr>
				<td> <input class="input" placeholder="아이디" type="text" name="id" required> </td>
			</tr>
			<tr>
				<td> pw(6자리 이상) </td>
			</tr>
			<tr>	
				<td > <input class="input" type="password" placeholder="비밀번호" name="ipassword" required> </td>
			</tr>
			<tr>
				<td> 학번 </td>
			</tr>
			<tr>
				<td> <input class="input" type="text" placeholder="학번" name="hockbun" required> </td>
			</tr>
			<tr>
				<td> 입학후 사용할 이메일주소 </td>
			</tr>
			<tr>
				<td> <input type="email"> </td>
			</tr>
			<tr>
				<td align= "center" bgcolor= "blue" > <input style="border: 0px" type="submit" value="가입신청" formmethod="POST" width= "300px" bgcolor= "blue"> </td>
			</tr>
		</form>
		</table>
	</body>
</html>
	
<?php
	echo "ID: ". $_POST["id"]."<br>";
	echo "nickname: ". $_POST["nickname"]."<br>";
	echo "학번: ". $_POST["hockbun"]. "<br>";
?>


<html>
<head>
	<title> Dinas Tenaga Kerja | Kabupaten Jombang </title>
	<style>
		body{
	background: #F1F6F9;
}

label{
	font-family: "Raleway Thin", sans-serif;
	font-size: 11pt;
	letter-spacing: 1.5pt;
}

.p1{
	margin-right: 150px;
	text-align: center;
	font-size: 20pt;
	color: #1C6758;
	font-family: "Raleway Thin", sans-serif;
}
.p2{
	margin-right: 150px;
	text-align: center;
	font-size: 18pt;
	color: #B70404;
	font-family: "Raleway Thin", sans-serif;
}

.kotakLogin{
	background: #009D73;
	border-radius: 8pt;
	box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
	height: 400px;
	margin: 60px auto 60px auto;
	width: 400px;
	padding: 12px 44px;
}

.title{
	font-family: "Raleway Thin", sans-serif;
	font-size: 20px;
	letter-spacing: 4px;
	padding-bottom: 23px;
	padding-top: 13px;
	text-align: center;
	color: white;
}

.underline{
	background: #FDB827;
	height: 2px;
	margin: -20px auto 0 auto;
	width: 89px;
}

.form{
	align-items: left;
	display: flex;
	flex-direction: column;
}

.formBorder{
	background: #FDB827;
	height: 1px;
	width: 100%;
}

.formContent{
	background: #FFFFFF;
	border: none;
	outline: none;
	padding-top: 14px;
}

.forgotPass{
  color: #11468F;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}

.submitBtn {
  background: #E62129;
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #C51605;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  letter-spacing: 1pt;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
</style>
</head>
<body>
	<div>
	<table align="center">
		<tr>
			<td>
				<img style="height: 250px; width: 190px; margin-right: 40px; margin-bottom: 10px;" src="login.png">
				<img style="height: 250px; width: 250px; margin-right: 100px; margin-bottom: 10px;" src="kemnaker.png">
				<p class="p1"><b> Dinas Tenaga Kerja </b></p>
				<p class="p2"> Kabupaten Jombang </p>
			</td>
			</div>
			<td>
				<div class="kotakLogin">
					<div class="title">
						<h2> Login </h2>
						<div class="underline"></div>
					</div>
					<form method="post" class="form" action="aksilogin.php">
						<!--email-->
						<label for="user" style="padding-top: 13px;">Username</label>
						<input type="text" id="user" class="formContent" name="user" autocomplete="on" required>
						<div class="formBorder"></div>

						<!--password-->
						<label for="password" style="padding-top: 23px;">Password</label>
						<input type="password" name="password" id="password" class="formContent" required>
						<div class="formBorder"></div>

						<!--forgot password-->
						<a href="#" class="forgotPass"> Daftar</a>

						<!--submit-->
						<input type="submit" name="submit" class="submitBtn" value="LOGIN">
					</form>
				</div>
			</td>
		</tr>
		<tr>

	</table>	
</body>
</html>
 <!-- Eksekusi Form Login -->

   
  <!-- Akhir Eksekusi Form Login -->

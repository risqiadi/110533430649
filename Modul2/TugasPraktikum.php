<!DOCTYPE html>
<html>
<head>
<title>Tugas Praktikum</title>
<!-- tag style digunakan untuk mempercantik tampilan halaman -->
<style>
body{
	background-color: #0F9;
}
.content{
	background-color: #0F9;
	margin: 100px auto;
	padding: 5px 20px 40px 20px;
	width: 350px;
	border: solid 3px #a4d7f5;
}
.min_content{
	margin: 0px auto;
	width: 250px;
}
.content h1{
	color: #3C0;
}
.content label{
	display:block;
}
.content input{
	display:block;
	margin: 5px 0 0 0;
	padding: 5px;
}
</style>
</head>
<body>

<?php
if(isset($_POST['user'])&&isset($_POST['pass'])){
	if($_POST['user']=='risqi'&&$_POST['pass']=='pass'){
		echo "Selamat Datang". $_POST['user'];
	}else {
		echo "Username atau Password yang anda masukkan salah";
	}
}
?>

<form name="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return validateForm()">
<div class="content">
<div class="min_content">
<h1>Login</h1>
</div>
<hr color="#a4d7f5" />
<div class="min_content">
<label>Username</label>
<input type="text" name="user" id="user" autofocus />
<label>Password</label>
<input type="password" name="pass" />
<input type="submit" value="Login" />
</div>
</div>
</form>

<script>
function validateForm(){
var x=document.forms["login"]["user"].value;
if (x==null || x==""){
	alert("Username Masih Kosong");
	document.getElementById("user").focus();
	return false;
}
var y=document.forms["login"]["pass"].value;
if (y==null || y==""){
	alert("Password Masih Kosong");
	document.getElementById("pass").focus();
	return false;
}
var alphaExp = /^[a-zA-Z]+$/;
if(x.match(alphaExp)){
	if(y.match(alphaExp)){
		return true;
	}else{
		alert("Password yang diisikan Harus Huruf");
		document.getElementById("user").focus();
		return false;
	}
	}else{
		alert("Username yang diisikan Harus Huruf");
		document.getElementById("user").focus();
		return false;
	}
}
</script>
</body>
</html>

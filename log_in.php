<!DOCTYPE html>
<html>
</head> 
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>

<form action="//файл проверить пользователя" id="loginform" method="post"name="loginform">
<p><label for="user_login">Имя пользователя<br>
<input class="input" id="username" name="username"size="32"  type="text" value=""></label></p>

<p><label for="user_pass">Пароль<br>
  <span class="table-row"></span>
<input class="input" id="password" name="password"size="32"  type="text" value=""></label></p>

	<p class="submit"><input class="button" name="login"type= "submit" value="Войти"></p>
	<p class="regtext">Еще не зарегистрированы? <a href= "sign_in.php">Регистрация</a>!</p>
	<br>
	<p class="regtext"><a href= "index.php">Вернуться на главный экран</a></p>
   </form>
 </div>
  </div>
  <style>

body {
    background: #DCCEE4;
   font-family: 'Open Sans', sans-serif;
   color: #777;
	}

	a {
   color: #673682;
 font-weight: 400;
	}
	
	span {
   font-weight: 300;
   color: #f58220;
	}

	.mlogin {
   margin: 170px auto 0;
	}

	.mregister {
  margin: 80px auto 0;
	}

	.error {
   margin: 40px auto 0;
	border: 1px solid #777;
 padding: 3px;
	color: #fff;
   text-align: center;
 width: 650px;
 background: #f58220;
	}

	.regtext {
   font-size: 13px;
   margin-top: 26px;
   color: #777;
	}
	
	/*= КОНТЕЙНЕРЫ
	--------------------------------------------------------*/
	.container {
	padding: 25px 16px 25px 10px;
	font-weight: 400;
	overflow: hidden;
	width: 350px;
	height: auto;
	background: #fff;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.13);
	box-shadow: 0 1px 3px rgba(0,0,0,.13);
	}
	
	#welcome {
	width: 500px;
	padding: 30px;
	background: #fff;
	margin: 160px auto 0;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,.13);
   box-shadow: 0 1px 3px rgba(0,0,0,.13);
	}
	
	.container h1 {
	color: #673682;
	text-align: center;
	font-weight: 300;
   border: 1px dashed #777;
   margin-top: 13px;
	}

	.container label {
	color: #777;
	font-size: 14px;
	}

	#login {
  width: 320px;
	margin: auto;
	padding-bottom: 15px;
	}

	.container form .input,.container input[type=text],.container input[type=password],.container input[type=e] {
	background: #fff;
	font-size: 24px;
	line-height: 1;
	width: 100%;
	padding: 3px;
 margin: 0 6px 5px 0;
   outline: none;
   border: 1px solid #d9d9d9;
	}
	
	.container form .input:focus {
	border: 1px solid #d9d9d9;
 -webkit-box-shadow: 0 0 3px 0 rgba(245,130,32,0.75);
-moz-box-shadow: 0 0 3px 0 rgba(245,130,32,0.75);
 box-shadow: 0 0 3px 0 rgba(245,130,32,0.75);
	}
	
	/*= КНОПКИ
	--------------------------------------------------------*/
	
	.button{
	border: solid 1px #673682;
	background: #673682;
	background: -webkit-gradient(linear, left top, leftbottom, from(#faa51a), to(#f47a20));
	background: -moz-linear-gradient(top,  #faa51a, #f47a20);
  filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
   color: #fff;
	padding: 7px 12px;
	-webkit-border-radius:4px;
moz-border-radius:4px;
 border-radius:4px;
	float: right;
	cursor: pointer;
	}
	
	.button:hover{
	background: #f47c20;
  background: -webkit-gradient(linear, left top, leftbottom, from(#f88e11), to(#f06015));
	background: -moz-linear-gradient(top,  #f88e11, #f06015);
  filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
	}
	/*= ПОДВАЛ
	--------------------------------------------------------*/
	footer {
color: #777;
font-size: 12px;
text-align: center;
margin-top: 20px;
	}
</style>

</body>
</html>
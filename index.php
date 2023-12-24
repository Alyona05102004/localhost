<!DOCTYPE html>
<html>
</head> 
<body>

    <title> главная страница </title>
    <link rel="sylesheet" type="text/css" href="style.css">
  </head>
<body>
  <div class="container">
    <a href="log_in.php">
      <span>Войти</span>
    </a>
    <a href="sign_in.php">
      <span>Зарегистрироваться</span>
    </a>
  </div>
<style>
 @import url('htpps://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
display: flex;
justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #000000;
}
.container{
display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.container a{
position: relative;
  width: 220px;
  height: 60px;
  display: inline-block;
  background: #fff;
  margin: 20px;
}
.container a:before,
.container a:after
{
content:'';
  position: absolute;
  inset: 0;
  transition: 0.5s;
  background: #f00
}
.container a:nth-child(1):before,
.container a:nth-child(1):after
{
 background: linear-gradient(45deg, #00ccff, #0e1538, #d400d4)
}
.container a:nth-child(2):before,
.container a:nth-child(2):after
{
  background: linear-gradient(45deg, #f0075b, #0e1538, #1aff22);
}
.container a:hover:before
{
  inset: -3px;  
}
.container a:hover:after
{
  inset: -3px;  
  filter: blur(10px);
}
.container a span{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: inline-block;
  background: #0d0908;
  z-index: 10;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #fff;
  border: 1px solid #ffffff;
  overflow: hidden;
}
.container a span::before{
content:'';
  position: absolute;
  top: 0;
  left: -50%;
  width: 100%;
  height: 100%;
  background: rgba(255,255,255,0.075);
    transform: skew(25deg)
}
</style>
</body>
</html>

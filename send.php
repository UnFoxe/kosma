<?php


if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

//$to = "denjice@mail.ru"; Ваша почта
$to = "alexwebua1@gmail.com"; //Ваша почта
$headers = "Content-type: text/plain; charset = utf-8";
$subject = "Сообщение с вашего сайта";
$message = "Арктика: \nИмя: $name \nТелефон: $phone " ;
$send = mail ($to, $subject, $message, $headers);
if ($send == 'true')

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<link rel="stylesheet" href="/css/style.css" />
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
<title>Спасибо! Мы свяжемся с вами!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 7000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
<style>
  * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;

  font-family: "RobotoCondensed";
} 
.center {
  width: 100%;
    min-height: 100vh;
    position: absolute;
    background: url("../img/decor/welcome-bg.jpg") center no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
  justify-content: center;
  align-items: center;

}
.center:before {
  content: "";
width: 100%;
height: 100%;
position: absolute;
background: #000;
opacity: 0.4;


}
  .mets {
  width: 100%;
  height: 50%;
  min-height: 500px;
  margin: auto;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index:3;
  flex-direction: column;
  background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    color: #fff;
}
.mets i {
    font-size: 72px;
    color: #fff;
    margin: 0 auto;
  }
  .mets h1 {
    text-transform: uppercase;
    font-size: 42px;
    font-weight: 600;
    margin: 40px 0;
    font-family: "Monserat" sans-serif;
        color: #fff;
  }
  .mets span {
    text-transform: uppercase;
    font-weight: 600;
    font-size: 18px;
    font-family: "Monserat" sans-serif;
        color: #fff;
  }
</style>
</head>
<body>
  <div class="center">
  <div class="mets"><i class="fas fa-check-circle"></i>
   <h1 >СПАСИБО ЗА ОБРАЩЕНИЕ</h1>
    <span>МЫ СВЯЖЕМСЯ С ВАМИ В БЛИЖАЙШЕЕ ВРЕМЯ!</span>
    </div>
  </div>
  
</body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Лабораторная №1</title>
  <style type="text/css">
   body {
    font: 10pt Arial, Helvetica, sans-serif; /* Шрифт на веб-странице */
    background: #e1dfb9; /* Цвет фона */
   }
   h2 {
    font-size: 1.1em; /* Размер шрифта */
    color: #800040; /* Цвет текста */
    margin-top: 0; /* Отступ сверху */
   }
   #container {
    width: 500px; /* Ширина слоя */
    margin: 0 auto; /* Выравнивание по центру */
    background: #f0f0f0; /* Цвет фона левой колонки */
   }
   #header {
    font-size: 2.2em; /* Размер текста */
    text-align: center; /* Выравнивание по центру */
    padding: 5px; /* Отступы вокруг текста */
    background: #8fa09b; /* Цвет фона шапки */
    color: #ffe; /* Цвет текста */
   }
   #sidebar {
    margin-top: 10px; 
    width: 110px; /* Ширина слоя */
    padding: 0 10px; /* Отступы вокруг текста */
    float: left; /* Обтекание по правому краю */
   }
   #content {
    margin-left: 130px; /* Отступ слева */
    padding: 10px; /* Поля вокруг текста */
    background: #fff; /* Цвет фона правой колонки */
   }
   #footer {
    background: #8fa09b; /* Цвет фона подвала */
    color: #fff; /* Цвет текста */
    padding: 5px; /* Отступы вокруг текста */
    clear: left; /* Отменяем действие float */
   }
  </style>
 </head>
 <body>
  <div id="container">
   <div id="header">Практическая работа №1</div>
   <div id="sidebar">
   <p><a href="index.php">Главная страница</a></p>
    <p><a href="upr.php">Практическая работа №1</a></p>
    <p><a href="sr.php">Самостоятельная работа №1</a></p>
    <p><a href="upr2.php">Практическая работа №2</a></p>
    <p><a href="sr2.php">Самостоятельная работа №2</a></p>
   </div>
   <div id="content">
<p><b>Упражнение №1</b> Вывод времени: <?php $d=date("d.m.Y H:i"); echo($d);?></p>

<p><b>Упражнение №2</b> Типы переменных <br><?php
 $var1= '3';
 $var2 = 5;
 echo $var1 . ' - ' . gettype($var1) . '<br>';
 print ($var2 . ' - ' . gettype($var2) . '<br>');
 $var3= 'abc';
 var_dump ($var3);
 echo '<br>';
 $var4=123;
 var_dump ($var4);
?> 
</p>

<p><b>Упражнение №3</b> <p> Арифметические операции: <br>
<p>
<?php
 $x=12;
 $y=4;
 echo('12+4=' . ($x+$y) . '<br>');
 echo('12-4=' . ($x-$y) . '<br>');
 echo('12*4=' . ($x*$y) . '<br>');
 echo('12/4=' . ($x/$y));
?></p>
<p><b>Упражнение №4</b> <p> Работа с константой: <br>
<?php 
$num_E = 2.71828;
$num_E1 = 2.71828;
$num_E2 = 2.71828;
$num_E3 = 2.71828;
echo 'Число е равно ' . $num_E . '<br>';
print ('$num_E = ' . $num_E . ' - ' . gettype($num_E) . '<br>');
settype($num_E1, "boolean");
print ('$num_E = ' . $num_E1 . ' - ' . gettype($num_E1) . '<br>');
settype($num_E2, "string");
print ('$num_E = ' . $num_E2 . ' - ' . gettype($num_E2) . '<br>');
settype($num_E3, "integer");
print ('$num_E = ' . $num_E3 . ' - ' . gettype($num_E3) . '<br>');
?>
   </div>
   <div id="footer">Богданов М.</div>
  </div> 
 </body>
</html>
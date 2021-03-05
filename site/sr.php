
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Богданов М.</title>
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
   <div id="header">Самостоятельная работа №1</div>
   <div id="sidebar">
   <p><a href="index.php">Главная страница</a></p>
    <p><a href="upr.php">Практическая работа №1</a></p>
    <p><a href="sr.php">Самостоятельная работа №1</a></p>
    <p><a href="upr2.php">Практическая работа №2</a></p>
    <p><a href="sr2.php">Самостоятельная работа №2</a></p>
   </div>
   <div id="content">
<p><b>Вычисление, вариант 3</b></p>
<img src="p.png" alt="Пример">
<p><b>Введем следующие переменные:</b><br>
<?php
 $numberA = rand(-20,20);
 $numberD = rand(-20,20);
 $numberC = rand(-20,20);
 $itog = (((2*$numberC)+($numberD*51))/($numberD - $numberA - 1));
 print ('Число А, равное ' . $numberA . ', число D, равное ' . $numberD . ' и число С, равное ' . $numberC . '<br><br>');
 echo ('При помощи полученных данных вычислим следующее выражение:' . '<br>');
 print ('2 * (' . $numberC . ') + ' . '51 * (' . $numberD . ')' . '<br>');
 echo ('—————————' . ' = ' . $itog . '<br>');
 print ('(' . $numberD . ') - (' . $numberA . ') - 1' . '<br>');
?> 
<br>
<br>
<br>
<br>
</p>
   </div>
   <div id="footer">Богданов М.</div>
  </div> 
 </body>
</html>
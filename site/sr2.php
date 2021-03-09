
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
   <div id="header">Самостоятельная работа №2</div>
   <div id="sidebar">
   <p><a href="index.php">Главная страница</a></p>
    <p><a href="upr.php">Практическая работа №1</a></p>
    <p><a href="sr.php">Самостоятельная работа №1</a></p>
    <p><a href="upr2.php">Практическая работа №2</a></p>
    <p><a href="sr2.php">Самостоятельная работа №2</a></p>
   </div>
   <div id="content">
<p><b>Упражнение 1</b></p>
<TABLE border=1>
<?php
	$z=0;
	for ($i=1; $i<=10; $i++) { // запускаем первый цикл
		echo ("<tr>"); // начало строки таблицы
			for ($k=1; $k<=10; $k++) 
				{ // запускаем второй цикл
				echo ("<td align=center>"); // открываем ячейку таблицы
				$p=$z+$k; // находим произведение двух чисел и...
					if ($p%2 == 0) 
						{
							echo '<p style=color:Red;>' . $p . '</p>';
						} 
					else 
						{
							echo $p;
						}
				echo ("</td>"); // а потом закрываем ячейку
			}
		echo ("</tr>"); // конец строки таблицы
	$z=($z+10);
}
?>
</TABLE>
<br>
<p><b>Упражнение 2</b></p>
<p><b>Характером натурального числа назовем сумму всех его делителей, не равных единице и
самому числу. Характером простого числа будем считать нуль. Написать программу,
которая вычисляет характер случайного числа N.
</b></p>
<p><b>Найдем характер числа N, которое равно <?php $random = rand(0, 100);
$k=0; echo "$random. <br>"; ?> Его делители:</b></p>
<?php
   for ($x=1; $x<=$random; $x++)
   {  
		if ($random % $x==0)  
		{		
			echo "$x ";
			$k++;
			$q = $q + $x;
		}
	}
	if ($k>2)
		{
			echo ("<br> Это число натуральное, его характер " . $q);
		}
		else
		{
			echo ("<br> Это число простое, характер 0");
		}
?>
<br>
<br>
</p>
   </div>
   <div id="footer">Богданов М.</div>
  </div> 
 </body>
</html>
 
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
   <div id="header">Практическая работа №2</div>
   <div id="sidebar">
   <p><a href="index.php">Главная страница</a></p>
    <p><a href="upr.php">Практическая работа №1</a></p>
    <p><a href="sr.php">Самостоятельная работа №1</a></p>
    <p><a href="upr2.php">Практическая работа №2</a></p>
    <p><a href="sr2.php">Самостоятельная работа №2</a></p>
   </div>
   <div id="content">
<p><b>Упражнение №1</b> <br>
<?php
if (isset($_REQUEST['znak1']))
	{
	$text = "Вы выбрали значения a=0; b=0";
	$а = 0;
	$b = 0;
	}
else if (isset($_REQUEST['znak2']))
	{
	$text = "Вы выбрали значения a=10; b = ''true''";
	$а = 10;
	$b = "true";
	}
else if (isset($_REQUEST['znak3']))
	{
	$text = "Вы выбрали значения a=false; b = ''false''";
	$а = false;
	$b = "false";
	}
else if (isset($_REQUEST['znak4']))
	{
	$text = "Вы выбрали значения a=-1; b = '' ''";
	$а = -1;
	$b = "";
	}
?>
 <form>
<input type="text" size="40" value="<?php echo $text; ?>" disabled>
<input type="submit" name="znak1" value="$a=0; $b=0;" />
<input type="submit" name="znak2" value="$a=10; $b=''true'';" /><br>
<input type="submit" name="znak3" value="$a=false; $b=''false'';" />
<input type="submit" name="znak4" value="$a=-1; $b='' '';" />
</form>

<?php
if ($a) { echo '$a='."$a - истина<br>"; }
 else { echo '$a='."$a - ложь<br>"; }
if ($b) { echo '$b='."$b - истина<br>"; }
 else { echo '$b='."$b - ложь<br>"; }
?>
</p>

<p><b>Упражнение №2</b> <p> Сравнение чисел: <br>
<?php
$x=rand(1,10);
$y=rand(1,10);
print ('$x =' . $x . "<br>");
print ('$y =' . $y . "<br>");
if ($x>$y) echo("Наибольшее =" . $x);
elseif ($x<$y) echo ("Наибольшее =" . $y);
else print ("Наибольшего нет");
?></p></p>
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
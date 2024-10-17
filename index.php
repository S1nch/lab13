<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "lab11.php " method="get">
      Введіть рік:  <input type="number" name = "year">
        <input type = "submit" value = "Enter">
    </form>
<?php
     define('year', $_GET["year"]);
     if(year!=null){
		$index = (year - 1984)%12;
		switch ($index) {
				case 0: 
					echo "Рік щура"; 
					break;
				case 1: 
					echo "Рік корови"; 
					break;
				case 2: 
					echo "Рік тигра"; 
					break;
				case 3: 
					echo "Рік зайця"; 
					break;
				case 4: 
					echo "Рік дракона"; 
					break;
				case 5: 
					echo "Рік змії"; 
					break;
				case 6: 
					echo "Рік коня"; 
					break;
				case 7: 
					echo "Рік вівці"; 
					break;
				case 8: 
					echo "Рік мавпи"; 
					break;
				case 9: 
					echo "Рік курки"; 
					break;
				case 10: 
					echo "Рік собаки"; 
					break;
				case 11: 
					echo "Рік свині"; 
					break;
				default:
					echo "Введіть рік після 1984";
					break;
		}}
?>  
<?php  
 echo "<br><b>Група СН-42, Куцинда Л.Ю.</b>";
 echo "<br>";
 echo "<b>Дата створення документу = ".date('14.10.2024')."</b>";
 echo "<br>";
 echo "<b>Поточна дата = ".date('d.m.2024')."</b></br>";
?>  
</body>
</html>

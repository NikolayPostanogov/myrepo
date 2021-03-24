<?php
echo "Год "; 
$year=$_GET['Year'];
echo $year;
echo " високосный?";
$text="";
if (is_numeric($year)){
    if ($year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0)){
        $text = "ДА";
    }
    else{
        $text = "НЕТ";
    }
}
else{
    $text = "ОШИБКА ВО ВХОДНЫХ ДАННЫХ";
}
echo " $text";
?> 
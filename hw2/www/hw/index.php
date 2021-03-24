<!DOCTYPE html>
<HTML>
<HEAD>
<meta charset="UTF-8"/>
<TITLE>Задание №2</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
</HEAD>

<BODY>
<?php
$array = array("abcd", "bar", "abcde", "abcdef", "abc", "abasd");
$pref = "abcd";

#Функция для вывода массива на экран.
function printing($array){
	foreach ($array as &$value) {
    echo "$value; ";
	}
}

#Функция, возвращает массив значений элементов массива $array, которые начинаются с префикса $pref
function foo($pref, $array){
	foreach ($array as &$value) {
		$arr=array();
	    $rest = substr($value, 0, strlen($pref));
	    if($rest === $pref){
	        array_push($arr , $value);
	    }
	    return $arr;
	}
}
echo "Массив: ";
printing($array);
echo "Префикс: $pref; ";
echo "Результат: ";
printing(foo($pref, $array));
?>

</BODY>
</HTML>
<?php
$hips=$_GET['hips'];
$smus=$_GET['smus'];

#n - количество хипстеров, m - количество смузи
function foo($n, $m){
	if (is_numeric($m) and is_numeric($n)){
    	$kol= (int)($m / $n);
    }
    else{
    	$kol="Неверные входные данные";
    }
    return $kol;
}
$kol = foo($hips, $smus);
if(is_numeric($kol)){
	echo "Количество смузи доставшееся каждому хипстеру: $kol";
}
else{
	echo "$kol";
}
?> 
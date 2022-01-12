<?php error_reporting(-1);
// Вычислить  значение  многочлена  и  его  первой  производной  в  заданной точке x (коэффициенты хранятся в массивах).    
$A = [3, 7, 9, 5];
$x =2;
for($n = 0; $n <count($A); $n++){
    $res += $A[$n]*($x ** $n);
}
$fstpr = get_pr($A, $x);

echo("Значение многочлена".$res."<br>"); 
echo("Его первая производная".$fstpr);

function get_pr($array, $x){
    $arr =[];
    $n = 0;
    for($i = 1; $i < count($array); $i++){
        $arr[$n] = $array[$i];
        $n++;
    }
    for($i = 0; $i < count($array); $i++){
        $arr[$i] = $arr[$i] *($i+1);
    }
    $res = 0;
    for($n = 0; $n < count($arr); $n++){
        $res += $arr[$n]*($x ** $n);
    }
    return $res;
}




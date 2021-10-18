­­<?php
// asigancion

// echo $name;
//$name = 'yamy';
//$age = 31;


//echo 'hola! Mi nombre es' . $name . ' y tengo ' . $age . ' años <br>';

$a = 10;
$b = 5;
$diasem = [
    'dia1' => 'lunes',
    'dia2' => 'martes',
   'dia3' => 'miercoles',
];

//echo '<br> la suma 10 + 5 = ' . ($a + $b);
//echo '<br> la multiplicacion 10 * 5 = ' . ($a * $b);
//echo '<br> la resta 10 - 5 = ' . ($a - $b);
//echo '<br> la division 10 / 5 = ' . ($a / $b);
//echo '<br> el modulo de 10 % 5 = ' . ($a % $b);
//echo '<br> la potencia de 10 ** 5 =' . ((int)$a ** (int)$b);

//echo '30 + 15 = ' . ((int)$a + (int)$b);
//echo '<br> mi arreglo:' . $diasem['dia1'];


//define ('curso' , 'AppWeb en servidor');
//echo '<br> mi constante es: ' . (curso);
//define ('password', 12345);
//echo '<br> mi contraseña es: ' . (password);


// necesito que guarde su email y user de GitHub y los muestre en pantalla
//$email = 'kathagui15@gmail.com';
//$user = 'Aguillón90';

//echo '<br>' , 'su email es :' . $email;


//variables variables
//$appweb = 'curso';
//$curso = 'servidor';

//echo '<br> mi variable es: ' . $appweb;
//echo '<br> mi variable variable es: ' . $$appweb;


//concatenar dos variables de tipo string
//$cadena1 = 'hola hoy es ';
//$cadena2 = 'domingo 17 de octubre';

//echo '<br>' . $cadena1 . $cadena2;

//incremento/decremento
$num1 = 7;
$num1++;

$num2 = 6;
$num2--;

//echo 'el incremento de num1 es: ' . $num1 . 'y el decremento de num2es: '. $num2;

//comparadores
$x = '11';
$y = 11;
if ($x == $y){
    echo 'comparacion == X es igual a Y';
}
if ($x === $y){
    echo 'comparacion === X es igual a Y';
} else {'X no es igual a y en valor y tipo';
    //echo '<br> X no es es igual a Y en valor y tipo';

}

// diferencia de valores
if ($x != $y) {
    echo '<br> X es diferente de Y';
}
else {
    echo '<br> X es igual en valor a Y';
}

// diferencia !==, valor - tipo
if ($a !== $y){
    echo '<br> X es diferente en valor y tipo de Y';
}
else {
    echo   'X es igual en valor y tipo a Y';
}


// comparadores
$z = 10;
if ($x > $z){
    echo '<br> x es mayor que z';
}


//declarar 3 variables y compara con if si son iguales valor y en valor y tipo
//realizar una comparacion del valor menor que otro
//imprimir el resultado en pantalla

$l = 9;
$m = 9;
$n = '9';

if ($l == $m) {
    echo '<br> las 3 varables son iguales en valor';
}
else {
    echo '<br> las 3 varables no son iguales en valor';
}

if ($l == $m) {
    echo '<br> las 3 varables son iguales en valor y tipo';
}
else {
    echo '<br> las 3 varables no son iguales en valor y tipo';
}

$p = 10;
$q = 100;
if ($p < $q){
    echo '<br> el valor de p es menor que el valor de q';
}
else {
   echo '<br> el valor de p no es menor que el valor de q';
}

//operadores logicos
$k = '20';
$j = 20;
$i = 30;

// comparo que k es igual a j y que j es menor que i

if ($k == $j and $j < $i) {
    echo $k . 'es igual a ' . $j . 'y' . $j . 'es menor que ' . $i ;
}else {
    echo '¡la comparacion es falsa!';
}

if ($k === $j or $j > $i){
    echo 'verdadero';
} else {
    echo 'falso';
}

//xor



//not
    if ($k == $j ){
        echo 'verdadero';
}  else {
    echo 'falso'; 

    }
?>
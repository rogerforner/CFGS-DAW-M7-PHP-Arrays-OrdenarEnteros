<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Valores
//# Ordenar
//# Resultado
//## Ascendente
//## Descendente
//# *********************************************************************


//# Valores
//# ---------------------------------------------------------------------
//Obtener el valor introducido en los campos Número.
$num0 = $_POST['num0']; //name="num0"
$num1 = $_POST['num1']; //name="num1"
$num2 = $_POST['num2']; //name="num2"
$num3 = $_POST['num3']; //name="num3"
$num4 = $_POST['num4']; //name="num4"
$num5 = $_POST['num5']; //name="num5"
$num6 = $_POST['num6']; //name="num6"
$num7 = $_POST['num7']; //name="num7"

//Array con los números obtenidos.
$numeros = array(
  $num0, $num1, $num2, $num3, $num4, $num5, $num6, $num7
);

//# Resultado
//# ---------------------------------------------------------------------
//## Ascendente
//# ---------------------------------------------------------------------
echo "<h1>Ascendente</h1>";
sort($numeros);

echo "<h2>print_r()</h2>";
print_r($numeros);

echo "<h2>var_export()</h2>";
var_export($numeros);

echo "<h2>foreach ()</h2>";
foreach ($numeros as $valor) {
  echo $valor . ", ";
}

//## Descendente
//# ---------------------------------------------------------------------
echo "<hr>";
echo "<h1>Descendente</h1>";
rsort($numeros);

echo "<h2>print_r()</h2>";
print_r($numeros);

echo "<h2>var_export()</h2>";
var_export($numeros);

echo "<h2>foreach ()</h2>";
foreach ($numeros as $valor) {
    echo $valor . ", ";
}
?>

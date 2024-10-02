<?php

// Criando a array lista de fruta
$lista_numerica = array( "01", "02", "03", "04", "05", "06", "07", "08", "09", "10" );

echo '<pre>';
print_r ($lista_numerica);
echo $lista_numerica[0]; //Isso mostrara o resultado.
echo "<hr>";
echo '</pre>';

echo '<pre>';
$lista_numerica[0] = "100";
$lista_numerica[4] = "500";
$lista_numerica[9] = "1000";
print_r ($lista_numerica);
echo '</pre>';
echo "<br>";
echo $lista_numerica[0];
echo "<br>";
echo $lista_numerica[4];
echo "<br>";
echo $lista_numerica[9];
?>
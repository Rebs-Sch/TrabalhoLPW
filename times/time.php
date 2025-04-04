<?php

echo '<link rel="stylesheet" href="estilos.css">';

$jogadores = array(
    "1" => "Tafarel",
    "2" => "Jorginho",
    "13" => "Aldair",
    "15" => "Márcio Santos",
    "6" => "Branco",
    "5" => "Mauro Silva",
    "8" => "Dunga",
    "17" => "Mazinho",
    "9" => "Zinho",
    "11" => "Romário",
    "7" => "Bebeto"
);

$i = 1;

echo "<table border = 1>";

echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "</tr>";

foreach ($jogadores as $numero => $nome){
    $cor;
    
    if (($i%2) == 0){
        $cor = "verde";
    } else{
        $cor = "amarelo";
    }
    
    desenhaLinha($numero, $nome, $cor);
    
    $i++;
}

echo "</table>";

function desenhaLinha($num, $nome, $cor){    
    echo "<tr class='" .$cor. "'>";
    
    echo"<td>" .$num. "</td>";
    echo"<td>" .$nome. "</td>";
    
    echo "</tr>";
}
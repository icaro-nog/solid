<?php

require __dir__."/vendor/autoload.php";

use src\Leitor;

// Leitor TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');

$array_txt = $leitorTXT->lerArquivo();
echo '<pre>';
print_r($array_txt);
echo '</pre>';

// Leitor CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$array_csv = $leitorCSV->lerArquivo();
echo '<pre>';
print_r($array_csv);
echo '</pre>';

echo '<br>';

// Merge de CSV e TXT
echo '<pre>';
print_r(array_merge($array_txt, $array_csv));
echo '</pre>';
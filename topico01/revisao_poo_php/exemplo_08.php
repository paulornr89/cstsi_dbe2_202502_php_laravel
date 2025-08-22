<?php

include_once 'classes/Pessoa.php';
include_once 'classes/IMC.php';

echo "\nClasse statica ".IMC::toString()."\n";

$pessoa = new Pessoa("Lucia", 60, 1.55, 89);
$pessoa2 = new Pessoa("Marcola", 36, 1.75, 124);

$pessoa->setImc(IMC::calc($pessoa));
$pessoa2->setImc(IMC::calc($pessoa2));

$pessoa->setSaude(IMC::classifica($pessoa));
$pessoa2->setSaude(IMC::classifica($pessoa2));

echo "IMC da $pessoa->nome eh ".$pessoa->getImc();
echo "\n".$pessoa->nome." esta com ".$pessoa->getSaude();

echo "\n\nIMC da $pessoa2->nome eh ".$pessoa2->getImc();
echo "\n".$pessoa2->nome." esta com ".$pessoa2->getSaude();


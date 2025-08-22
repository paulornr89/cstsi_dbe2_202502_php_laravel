<?php
include_once "Pessoa.php";

class IMC{

    public static function toString() { 
            return self::class;//$this
     }

    public static function calc(Pessoa $objPessoa){
        //echo "Calculando o IMC de $objPessoa->nome\n";        
        return $objPessoa->peso / $objPessoa->altura ** 2;
    }

    public static function classifica(Pessoa $objPessoa){
        $imc = $objPessoa->getImc();//self::calc($objPessoa);
        if($imc < 18.5)
            return "Abaixo do Peso";
        if(($imc >= 18.5) && ($imc <= 24.9))
            return "Saudável";
        if(($imc >= 25) && ($imc <= 29.9))
            return "Sobrepeso";
        if($imc >= 30)
            return "Obesidade";
    }
}
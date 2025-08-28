<?php

echo "TESTE PAULO CAMEL";

use Gvg\Dbe2\classes\Atleta;
use Gvg\Dbe2\classes\Medico;
use Illuminate\Support\Str;

//
//$med1 = new Medico("Pualo Paixão",122343,"Fisioterapeuta");

$list = ["paulo_roberto_nunes_da_rosa","PEDRO_Campelo rosa","LUIZITO"];

var_dump($list);

print_r(
    array_map(
        fn($p)=>Str::camel($p),
        $list
    )
);


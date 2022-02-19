<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

$nome = 'Eduardo';
$idade = 15;

//print_r($categorias));
//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++){
       if ($categorias[$i] == 'Infantil')
           echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
}
else if($idade >= 13 && $idade < 18){
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'Adolescente')
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
} else{
    for($i = 0; $i <= count($categorias); $i++){
        if ($categorias[$i] == 'Adulto')
            echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
}
<?php
function Seculo($yeara){

	if ($yeara < 0){
        echo'Ano negativo nao pode';
	}

        else if($yeara <= 100){
        echo 'O Século é 1';
	}

        else if ($yeara % 100 == 0){
        echo 'O Século é ' . $yeara / 100;
        }
        
        else{
        echo 'O Século é ', floor($yeara / 100) + 1;
        }
}
$yeara = 101;
echo Seculo($yeara);
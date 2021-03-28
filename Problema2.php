<?php
    $rondas = array(
        "ronda 1" => array( 140, 82),
        "ronda 2" => array( 89, 134 ),
        "ronda 3" => array( 90, 110 ),
        "ronda 4" => array(112, 106),
        "ronda 5" => array(88, 90)
    );
    $marcador = array(
        0=> 0,
        1=> 0
    );
    $num_rondas = 0;
    foreach( $rondas as $ronda){
        $num_rondas ++;
        if($ronda[0] > $ronda[1] && $ronda[0] - $ronda[1] > $marcador[1]){
            $marcador[1] = $ronda[0] - $ronda[1];
            $marcador[0] = 1;

        }elseif($ronda[1] > $ronda[0] && $ronda[1] - $ronda[0] > $marcador[1]){
            $marcador[1] = $ronda[1] - $ronda[0];
            $marcador[0] = 2;
        }
    };
    echo "$marcador[0] $marcador[1]";
?>

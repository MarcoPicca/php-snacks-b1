<?php 
$matchs = [
    match_one: [
        'squadra_casa' => 'Positano',
        'squadra_ospite'=> 'Senigallia',
        'punti_squadra_casa'=> '67',
        'punti_squadra_ospite'=> '71',
    ],

    match_two: [
        'squadra_casa' => 'Norreni',
        'squadra_ospite'=> 'Golezzi',
        'punti_squadra_casa'=> '87',
        'punti_squadra_ospite'=> '74',
    ],
];
?>

<?php 
    foreach( $match in $matchs ){
        foreach( $results in $match ){
            echo '$results';
        }
    }
?>
<?php 
/*
# Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60
*/ 
echo 'Ciao';

//Creo l'array di partenza
$matches = [
    [
        $home_team = [
            'name' => 'Olimpia Milano',
            'score' => 55
        ],
        $guest_team =[
            'name' => 'Cantù',
            'score' => 60
        ]
        ],
    [
        $home_team = [
            'name' => 'Varese Roosters',
            'score' => rand(1,100)
        ],
        $guest_team =[
            'name' => 'Roseto Sharks',
            'score' => rand(1,100)
        ]
        ],
    [
        $home_team = [
            'name' => 'Rimini Crabs',
            'score' => rand(1,100)
        ],
        $guest_team =[
            'name' => 'Legnano Knights',
            'score' => rand(1,100)
        ]
        ],
    [
        $home_team = [
            'name' => 'Bologna Eagles',
            'score' => rand(1,100)
        ],
        $guest_team =[
            'name' => 'Draghi Novara',
            'score' => rand(1,100)
        ]
        ],
    [
        $home_team = [
            'name' => 'Cantù',
            'score' => rand(1,100)
        ],
        $guest_team =[
            'name' => 'Roseto Sharks',
            'score' => rand(1,100)
        ]
        ],
]
?>
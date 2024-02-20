<?php 
/*
# Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60
*/ 

//Creo l'array di partenza
// $matches = [
//     [
//         'home_team_name' => 'Olimpia Milano',
//         'home_team_score' => 55,
//         'guest_team_name' => 'Cantù',
//         'guest_team_score' => 60
//     ],
//     [
//         'home_team_name' => 'Varese Roosters',
//         'home_team_score' => rand(1,100),
//         'guest_team_name' => 'Roseto Sharks',
//         'guest_team_score' => rand(1,100)
//     ],
//     [
//         'home_team_name' => 'Rimini Crabs',
//         'home_team_score' => rand(1,100),
//         'guest_team_name' => 'Legnano Knights',
//         'guest_team_score' => rand(1,100)
//     ],
//     [
//         'home_team_name' => 'Bologna Eagles',
//         'home_team_score' => rand(1,100),        
//         'guest_team_name' => 'Draghi Novara',
//         'guest_team_score' => rand(1,100)
        
//     ],
//     [
//         'home_team_name' => 'Cantù',
//         'home_team_score' => rand(1,100),        
//         'guest_team_name' => 'Roseto Sharks',
//         'guest_team_score' => rand(1,100)        
//     ],
// ];

$matches = [
    [
        'home' => [
            'name' => 'Olimpia Milano',
            'score' => 55,
        ],
        'guest' =>[
            'name' => 'Cantù',
            'score' => 60
        ]
    ],
    [
        'home'=>[
            'name' => 'Varese Roosters',
            'score' => rand(1,100),
        ],
        'guest'=>[
            'name' => 'Roseto Sharks',
            'score' => rand(1,100)
        ]
    ],
    [
        'home'=> [
            'name' => 'Rimini Crabs',
            'score' => rand(1,100),
        ],
        'guest' =>[
            'name' => 'Legnano Knights',
            'score' => rand(1,100)
        ]
    ],
    [
        'home'=>[
            'name' => 'Bologna Eagles',
            'score' => rand(1,100),        
        ],
        'guest' =>[
            'name' => 'Draghi Novara',
            'score' => rand(1,100)
        ]
        
    ],
    [
        'home'=>[
            'name' => 'Cantù',
            'score' => rand(1,100),        
        ],
        'guest'=>[
            'name' => 'Roseto Sharks',
            'score' => rand(1,100)        
        ]
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h2>SNACK 1</h2>
        <ul>
            <?php foreach($matches as $index => $match) : ?>
            <li>
                <h4> Match <?= $index + 1 ?>: </h4>
                <!-- Olimpia Milano - Cantù | 55-60 -->
                <div>
                    <!--  "{$match['home_team_name']} - {$match['guest_team_name']} | {$match['home_team_score']}-{$match['guest_team_score']}" -->
                    <?= "{$match['home']['name']} - {$match['guest']['name']} | {$match['home']['score']}-{$match['guest']['score']}"?>
                </div>
            </li>
            <?php endforeach ?>
        </ul>
        <a href="http://localhost/php-snacks-blocco-1/">Torna indietro</a>
    </section>
</body>
</html>
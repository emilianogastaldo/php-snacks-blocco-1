<?php
/*
# Snack 2
Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga
un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

// controllo se ho qualcosa in GET
if(!count($_GET)){
    echo 'Nulla da mostrate';
    die();
}

// se ho qualcosa recupero i dati
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];



// Validazione dell'email
$is_valid_email = false;
// if((strpos($email,'.') || strpos($email,'.') === 0) && (strpos($email,'@') || strpos($email,'@') === 0)){
//     $is_valid_email = true;
// }
if(str_contains($email,'.') && str_contains($email,'@')){
    $is_valid_email = true;
}
// Validazione nome
$is_valid_name = mb_strlen(trim($name)) > 3;

// Validazione data
$is_valid_age = is_numeric($age) && $age > 0;

// Validazione del form
$is_invalid_form = !$is_valid_name || !$is_valid_email || !$is_valid_age;

// Logica per sapere se i dati vanno bene o meno
$message = $is_invalid_form ?  'Accesso negato': 'Accesso riuscito' ;
$class_color = $is_invalid_form ?  'text-danger':'text-success';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css'
        integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=='
        crossorigin='anonymous' />
</head>
<body>
    <section class="container mt-5">
        <h2 class="<?= $class_color ?>">
            <?= $message ?>
        </h2>
        <p>
            <?php 
            if(!$is_valid_name) echo 'Nome troppo corto';
            ?>
        </p>
        <p>
            <?php 
            if(!$is_valid_age) echo 'Non hai inserito un numero per l\'età';
            ?>
        </p>
        <p>
            <?php 
            if(!$is_valid_email) echo 'L\'email non ha @ o .';
            ?>
        </p>
        <a href="http://localhost/php-snacks-blocco-1/snack2/">Torna indietro</a>
    </section>    
</body>
</html>
<?php 
// Variables
    $name = "Miguel";
    $isdev = true;
    $age = 73;
    $output = "Hola " . $name . ", Con una edad de : " . $age . " 😀";
  

   

//Constantes 
    define('Logo_url', 'https://cdn.freebiesupply.com/logos/large/2x/php-logo-svg-vector.svg');
    const NOMBRE = 'Miguel';

    $ouputage = match (true) {
        $age < 2 => "Eres un bebe, $name 👶",
        $age <10 => "Vale eres un niño, $name 👦",
        $age <18 => "Eres un adolecente, $name 👨‍🎓",
        $age == 18 => "Eres mayor de edad, $name 🍺",
        $age < 40 => "Eres un adultoi, $name",
        $age < 60 => "Eres un adulto viejo, $name",
        default => "Bro.. , $name 💀",

    };

    $beastlanguages = ["PHP", "Java", "C++",];
    $beastlanguages [] = "Javascript";
    $beastlanguages [] = "Cobol";

    $person = [
        "name" => "Miguel",
        "isdev" => true,
        "age" => 73,
        "languages" => ["PHP", "Java", "C++"],
    ];
    $person["name"] = "pheralb";
    
    ?>

<?php
const API_URL = "https://www.whenisthenextmcufilm.com/api";
# Inicializamos una nueva sesion de CURL; ch = CURL handle
$ch = curl_init(API_URL);
//Indidcar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la peticion
y guardamos el resultado
*/ 
$result = curl_exec($ch);

//Una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); //Si solo quieres hacer GET de una API

$data = json_decode($result, true );
curl_close($ch);
?>

<head>
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>

</head>

<main>
    <section>

    <img src= "<?= $data["poster_url"]; ?>" width="200" alt="poster de <?= $data["title"]; ?>"
    style="border-radius: 16px" /> 

    </section>

    <hgroup>

        <h2><?= $data["title"]; ?>se estrena en <?=$data["days_until"]; ?> dias</h2>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>la siguiente es: <?=$data["following_production"]["title"];?> </p>

    </hgroup>

</main>

<style>
:root {

    color-scheme: light dark;

}

body {

    display: grid;

    place-content: center;
}

section{

    display: flex;
    justify-content: center;
    text-align: center;

}

hgroup{

    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;

}

img{

    margin: 0 auto;

}

</style>
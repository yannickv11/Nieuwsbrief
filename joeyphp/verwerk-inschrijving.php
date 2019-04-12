<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 9-4-2019
 * Time: 13:30
 */

// post array uitlezen
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$email = $_POST['mailadres'];

// Data in database stoppen

// verbinding maken met database:
$dbc = mysqli_connect('localhost', 'yannick' ,'1234', 'mijnschool', '8889') or die('error conecting');
// opdracht (query) schrijven
$query = "INSERT INTO nieuwsbrief_joey VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$email')";
//query uitvoeren
$result = mysqli_query($dbc,$query) or die('error query.');
// verbinding verbeken
mysqli_close($dbc);

// bevestigen dat data in database staat
if ($result) {
    echo 'de volgende gegevens zijn toegevoegd aan de database<br>';
    echo $voornaam. '<br>';
    echo $tussenvoegsel. '<br>';
    echo $achternaam. '<br>';
    echo $email. '<br>';
} else {
    echo 'sorry, er is iets misgegaan probeer het opnieuw.';
}
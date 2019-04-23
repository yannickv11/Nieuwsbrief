<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 16-4-2019
 * Time: 11:32
 */
// 0. Uitlezen van de POST-array
$subject = $_POST['subject'];
$message = $_POST['message'];

// 1. Connectie maken met de DB
$dbc = mysqli_connect('localhost','yannick','1234','mijnschool','8889') or die('error connecting');
//2. Kijken in de database en alle mailadressen tevoorschijn halen
$query = "SELECT mailadres FROM nieuwsbrief_joey";
$result = mysqli_query($dbc,$query) or die('error query');
//3. Loopje waarin een bericht wordt veroznden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar : '. $row['mailadres'] . '<br>';
    // variabelen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: 2088994@talnet.nl';
    // mail verzenden
    mail($to,$subject,$message,$headers);
}
echo 'Verzonden!<br>';
echo '<a href="nieuwsbrief.php">klik hier om terug te gaan naar de Homepage.</a><br>';
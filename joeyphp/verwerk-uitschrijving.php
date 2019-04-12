
<?php
// FORMULIER UITLEZEN (DATA BINNEN HALEN)
$mailadres = $_POST['mailadres'];


// CONNECTIE MAKEN MET DE DATABASE
$host = 'localhost';
$username = 'yannick';
$password = '1234';
$dbname = 'mijnschool';
$port = '8889';
$dbc = mysqli_connect($host,$username,$password,$dbname,$port) or die('error connecting.');
// QUERY SCHRIJVEN VOOR ZOEKEN NAAR DATA
$query = "SELECT * FROM nieuwsbrief_joey WHERE mailadres = '$mailadres'";

// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die('error query (SELECT).');

// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result);

//Testen of er regels zijn
if ($number_of_rows == 0 ) {
    echo 'Helaas, het mailadres '.$mailadres. ' staat niet in de database.<br>';
    echo '<a href="uitschrijven.php">klik hier om het nogmaals te proberen...</a><br><br>';
    exit();
}

// QUERY SCHRIJVEN VOOR VERWIJDERN VAN DATA
$query = "DELETE FROM nieuwsbrief_joey WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die('error query (DELETE).');

// CONNECTIE VEBREKEN
mysqli_close($dbc);
// VERSLAG DOEN VAN HET RESULTAAT
echo 'Het mailadres '.$mailadres. ' is verwijderd uit de databse ! <br>';
echo '<a href="nieuwsbrief.php">klik hier om terug te gaan naar de Homepage.</a><br><br>';

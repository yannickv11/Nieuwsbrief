<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beheren</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

// 1. Connectie maken met de DB
$dbc = mysqli_connect('localhost','yannick','1234','mijnschool','8889') or die('error connecting');
//2. Kijken in de database en alle mailadressen tevoorschijn halen
$query = "SELECT * FROM nieuwsbrief_joey";
$result = mysqli_query($dbc,$query) or die('error query');
echo '<table>';
//3. Loopje waarin alle mailadressen in beeld worden gebracht
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $voornaam = $row['voornaam'];
    $tussenvoegsel = $row['tussenvoegsel'];
    $achternaam = $row['achternaam'];
    $mailadres = $row['mailadres'];


 echo '<tr>';

echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td><td>$mailadres</td>";
echo '<td>';
echo '<a href = "delete.php?id='.$id.'">DELETE</a>';
echo '</td>';

echo '<td>';
echo '<a href = "edit.php?id='.$id.'">EDIT</a>';
echo '</td>';

echo '</tr>';
}
 echo '</table>';
echo '<a href="nieuwsbrief.php">klik hier om terug te gaan naar de Homepage.</a><br>';
?>

</body>
</html>


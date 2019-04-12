<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 9-4-2019
 * Time: 13:11
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nieuwsbrief - uitschrijven</title>
</head>
<body>
<h1>Nieuwsbrief</h1>
<h2>uitschrijven</h2>
<a href="nieuwsbrief.php">klik hier om terug te gaan naar de Homepage.</a><br><br>

<form method="post" action="verwerk-uitschrijving.php">
    <label>Mailadres:<input type="email" name="mailadres"></label><br><br>
    <input type="submit" name="submit">
</form>
</body>
</html>

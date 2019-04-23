<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 16-4-2019
 * Time: 10:31
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail versturen</title>
</head>
<body>
<form method="post" action="verwerk-verzending.php">
    <label>Subject<input type="text" name="subject"></label><br>
    <label>Message<textarea cols="40" rows="20" name="message"></textarea></label><br>
    <input type="submit" name="submit" value="Verzend">
</form>
<br>
<a href="nieuwsbrief.php">klik hier om terug te gaan naar de Homepage.</a>
</body>
</html>

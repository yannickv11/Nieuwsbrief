<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 6-5-2019
 * Time: 14:08
 */
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];

$id = $_GET['id'];
$dbc = mysqli_connect('localhost','yannick','1234','mijnschool','8889') or die('error connecting');
$query = "UPDATE nieuwsbrief_joey ";
$query .= "SET voornaam = '$voornaam', tussenvoegsel = '$tussenvoegsel', achternaam = '$achternaam', mailadres = '$mailadres' ";
$query .= "WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die('error updating');
header( "Location: beheren.php");
<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 6-5-2019
 * Time: 09:32
 */

$id = $_GET['id'];
$dbc = mysqli_connect('localhost','yannick','1234','mijnschool','8889') or die('error connecting');
$query = "DELETE FROM nieuwsbrief_joey WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die('error deleting');
header( "Location: beheren.php");

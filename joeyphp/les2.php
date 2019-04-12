<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 2-4-2019
 * Time: 12:35
 */

$dbc = mysqli_connect('localhost','yannick','1234','mijnschool',"8889") or die('error connecting');

$query = "SELECT * FROM klasgenoten";

$result = mysqli_query ($dbc , $query) or die('error querying');

while ($row = mysqli_fetch_array($result)) {
    echo $row['klasgenoot_id']. ' / ' .$row['voornaam']. ' / ' . $row['tussenvoegsel']. ' / ' . $row['achternaam'].
        ' / ' . $row['woonplaats'] . '<br>';
}
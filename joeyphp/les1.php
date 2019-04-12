<?php
/**
 * Created by PhpStorm.
 * User: yannick
 * Date: 1-4-2019
 * Time: 09:32
 */

$to = 'yannickvermeijden@live.com';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From:' . $_POST['from'];

mail($to , $subject , $message, $headers) or die ('error medling.');


echo 'U mail is verstuurd.';

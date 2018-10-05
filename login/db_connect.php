<?php
$link = mysql_connect('localhost', 'fidatotech_web', 'Regina@123');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
// echo 'Connected successfully';

?>
<?php
/// Read Method
$path = '/tkb';
$db = json_decode(file_get_contents('http://'.$_SERVER['HTTP_HOST'].$path.'/controller/user.json'), TRUE);
$dbuser = $db['user'][0];
$dbtkb = json_decode(file_get_contents('http://'.$_SERVER['HTTP_HOST'].$path.'/controller/tkbdb.json'), TRUE);
?>

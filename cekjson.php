<?php
$data = file_get_contents("http://localhost/contacts.json");
$json = json_decode($data, TRUE);
?>

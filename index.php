<?php

/*$contacts = array(
	array(
		"name" => "anusha",
		"number" => "7869372583"
	), array(
		"name" => "suchi",
		"number" => "8977348472"
	), array(
		"name" => "divya",
		"number" => "8749263489"
	), array(
		"name" => "jhansi",
		"number" => "9863836782"
	), array(
        "name" => "kiran",
		"number" => "8394675826"
	)
);*/

$dbh = new PDO('mysql:host=localhost;dbname=contacts', 'root', '');

$sth = $dbh->prepare("SELECT name, number FROM contacts");
$sth->execute();

$contacts = $sth->fetchAll();


echo json_encode($contacts);
<?php

require_once 'models/userData.php';

$dp = new dataUser ();
$dp -> id = "1";
$dp -> userName = "FlorFarru";
$dp -> key = "g1html56";
$dp -> email = "ecs2@exam.com";
$dp -> name = "Florencia";
$dp -> lastName = "Farruggia";
$dp -> birthDate = "10-10-2010";
$dp -> document = "10333444";
$dp -> discharge = "30-03-2023";


$dp -> showDataUser ();
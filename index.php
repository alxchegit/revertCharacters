<?php
require_once 'vendor/autoload.php';
// include 'CharactersClass.php';
use Services\CharactersClass;

$character = new CharactersClass();
$result = $character->revert(
    "Привет! Давно не виделись."
    // "Hello! My Friend."
);

echo $result;
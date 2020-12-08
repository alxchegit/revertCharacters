<?php
require_once 'vendor/autoload.php';

use Services\CharactersClass;

$character = new CharactersClass();
$result = $character->revert(
    "Привет! Давно не виделись."
    // "Hello! My Friend."
);

echo $result;
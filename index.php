<?php

include 'CharactersClass.php';

$character = new Characters();
$result = $character->revert(
    "Привет! Давно не виделись."
    // "Hello! My Friend."
);

echo $result;
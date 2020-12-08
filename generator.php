<?php

function generator($arg){
    for ($i=0; $i < 10; $i++) { 
        yield $i . '. ' .$arg;
    }
}

$generator = generator('Пункт');

foreach ($generator as $val){
    echo $val ."\n\r";
}
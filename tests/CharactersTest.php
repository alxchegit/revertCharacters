<?php

use PHPUnit\Framework\TestCase;
use Services\CharactersClass;

class CharactersTest extends TestCase 
{
    /**
    * @dataProvider providerRevert
    */
    public function testRevert($a, $b) 
    {
        $char = new Characters();
        $this->assertEquals($a, $char->revert($b));
    }

    public function providerRevert ()
    {
        return array (
            array("Тевирп! Онвад ен ьсиледив.", "Привет! Давно не виделись."),
            array("Olleh! Ym Dneirf.", "Hello! My Friend."),
        );
    }
}
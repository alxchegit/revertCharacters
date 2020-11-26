<?php

use PHPUnit\Framework\TestCase;

include './CharactersClass.php';

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
            array("Тевирп! онвад ен ьсиледив.", "Привет! Давно не виделись."),
            array("Olleh! ym dneirf.", "Hello! My Friend."),
        );
    }
}
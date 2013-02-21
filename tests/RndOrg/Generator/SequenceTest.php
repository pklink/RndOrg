<?php

class SequenceTest extends PHPUnit_Framework_TestCase
{
    // @TODO add more tests

    public function testGet()
    {
        $generator = new \RndOrg\Generator\Integer();
        $this->assertEquals(10, count($generator->get()));
    }

}

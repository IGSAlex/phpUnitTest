<?php

/**
 * @covers Email
 */
final class EmailTest extends PHPUnit_Framework_TestCase 
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $email =  new Email('user@example.com');
	
        $this->assertInstanceOf(
            'Email',
            $email::fromString('user@example.com')
        );

    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->setExpectedException('InvalidArgumentException');
        Email::fromString('i am not valid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }

}




<?php

use PHPUnit\Framework\TestCase;
require 'src/Email.php';

class EmailTest extends TestCase 
{
    public function testEmailIsValid ()
    {
        $email = new AnEmailClass ();
        $isValid = $email->isValidEmail('just@atest.com');
        $this->assertTrue($isValid);
    }
}
<?php

use PHPUnit\Framework\TestCase;
class ValidatePasswordTest extends TestCase {

   public function testValidLength() {

       $valPass = new ValidatePassword();
<<<<<<< HEAD
       $this->assertFalse($valPass->validLength('1234'));
=======
       $this->assertFalse($valPass->validLength('123456'));
>>>>>>> d0a6e018853f4709bda8ac51e6b7bbb6b29d0ed3
   }

}


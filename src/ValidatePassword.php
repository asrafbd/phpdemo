<?php

class ValidatePassword {

   const MIN_LENGTH = 6;
   const MAX_LENGHT = 20;
   public function validLength($password) {
   
      $passLength = strlen($password);
      return $passLength >= self::MIN_LENGTH && $passLength <= self::MAX_LENGHT;

   }

}

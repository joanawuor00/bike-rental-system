<?php
namespace App;
class LoginUser
{
  public $password;

public function setPassword(string $password)
   {
    $this->password = $password;
   }

public function passwordLength(string $password){
   if(strlen($password) < 8){
      return "weak";
   }else{
      return "strong";
   }
}

public function checkPasswordLength()
   {
    return $this->passwordLength($this->password);
   }
}
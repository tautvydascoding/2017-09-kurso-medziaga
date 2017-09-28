<?php
interface Edit
{
  function changeName($a);
  function isLogin();
  function getName();
}

abstract class User {
  public $name;
  public $password;
  public $createDate;
  public $lastLogin;
  abstract public function Logout();
  public function clearlastLoginTime(){

  }
}

class Admin extends User implements Edit {
  public function changeName ($x) {

  }
 function isLogin() {

 }
 function getName() {

 }
 function Logout() {

 }
}


 ?>

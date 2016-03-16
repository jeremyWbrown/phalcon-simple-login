<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;
use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;

class Users extends Model
{


  /**
   * @var integer
   */
  public $id;

  /**
   * @var string
   */
  public $name;

  /**
   * @var integer
   */
  public $password;

  /**
   * @var string
   */
  public $role;


  // Temporary validation till database intigration
  public static function _findFirst($username, $password)
  {
    $usernames = array('username');
    $passwords = array('password');

    if(in_array($username, $usernames) && in_array($password, $passwords)) {
      return true;
    } else {
      return false;
    }

  }

}

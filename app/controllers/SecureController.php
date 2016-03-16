<?php

use Phalcon\Mvc\Controller;

class SecureController extends Controller
{

  public function initialize()
  {

    // Require User be logged in
    $auth = $this->session->get('auth');
    if(!$auth) {
      $this->response->redirect("login?un_authorized");
    }

  }

}

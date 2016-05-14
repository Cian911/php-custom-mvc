<?php

class Error extends Controller {

  public $errors = array();

  public function __construct($error){
    parent::__construct();

    $this->view->errors = $error;

  }

  public function index(){
    $this->view->render('error/index');
  }

}

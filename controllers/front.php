<?php

class Front extends Controller {

	protected $data;

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->view->render('front/index', $this->data);
	}

}

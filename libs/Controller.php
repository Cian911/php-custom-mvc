<?php

class Controller {

	protected $view;

	public function __construct(){
		$this->view = new View();
	}

	public function loadModel($name){
		$path = BASE . '/model/' . $name . '_model.php';

		if(file_exists($path)){
			require BASE . '/model/' . $name . '_model.php';
			$modelName = $name . 'Model';
			$this->model = new $modelName();
		} 
	}

	protected function cleanInput( $input ) {
		$input = strip_tags( $input );
		$input = htmlentities( $input );

		return $input;
	}
}

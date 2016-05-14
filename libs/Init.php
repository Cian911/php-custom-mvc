<?php

class Init {

	public function __construct() {

		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/'); //right trim (remove characters from the right side of the string)
		$url = explode('/', $url);

		if(empty($url[0])){
			require BASE . '/controllers/front.php';
			$con = new Front();
			$con->loadModel('front');
			$con->index();

			return false;
		}


		$file = BASE . '/controllers/' . $url[0] . '.php';

		if(file_exists($file)){
			require $file;
		} else {
			$this->error('File does not exist.');
		}

		$controller = new $url[0];
		$controller->loadModel($url[0]);

		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} else {
				$this->error('Method does not exist.');
			}
		} else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} else {
					$this->error('Not Found.');
				}
			} else {
				$controller->index();
			}
		}
	}

	public function error($error) {
		require BASE . '/controllers/error.php';
		echo '<pre>';print_r( $error );die;
		$error = new Error($error);
		$error->index();
		return false;
	}
}
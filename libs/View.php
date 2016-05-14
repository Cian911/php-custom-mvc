<?php

class View {

	public function render($name, $data) {
		require BASE . '/views/head.php';
		require BASE . '/views/' . $name .'.php';
		require BASE . '/views/foot.php';
	}

}
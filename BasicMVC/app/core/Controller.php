<?php

class Controller {
	
	public function model($model) {
		require_once '../app/models/' . $model . '.php';
		return new $model();
	} // einde function model();
	
	public function view($view, $data = []) {
		require_once '../app/views/' . $view . '.php';
	} // einde function view();
	
} // einde class Controller

?>
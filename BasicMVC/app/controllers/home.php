<?php

class Home extends Controller {
	
	public function index($name = '') {
			$this->view('home/index', ['name' => $user->name]);
	} // einde function index();
	
	public function create($username = '', $email = '') {
		User::create([
			'username'=> $username,
			'email' => $email
		]);
		
	}
	
} // einde class Home

?>
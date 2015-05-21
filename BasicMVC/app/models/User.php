<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
 {
	public $name;
	
	//dit is om te voorkomen dat er een mass assignment tegen te gaan.
	protected $fillable = ['username', 'email']; 

} // einde class User model

?>
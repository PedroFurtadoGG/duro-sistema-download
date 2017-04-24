<?php defined('SYSPATH') or die('No direct script access.');

class Model_Headers extends Model{
	
	public static function header(){
		$vw = new View('inc/header');
		return $vw;
	}
	
	public static function footer(){
		$vw = new View('inc/footer');
		return $vw;
	}
	
	public static function head($page, $title){
		$vw = new View('inc/head');
		$vw->title = $title;
		return $vw;
	}
	



	
}

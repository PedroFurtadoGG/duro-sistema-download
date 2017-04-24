<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function before(){
        session_name("Login"); 
		session_start();
    }
	
	public function action_index(){
		$get = $this->request->param('arg1');
	
		if(!empty($_POST)){
			
			
			$email = $_POST['emailLogin'];
			$senha = $_POST['passwordLogin'];
				
			$queryEmail = DB::select('valor', 'codconteudo','codcampo')
									  ->from('campovalor')
									  ->where('valor', '=' , $email)
									  ->and_where('codpagina', '=', 4)
									  ->execute()->as_array();
									  
			$querySenha = DB::select('valor', 'codconteudo','codcampo')
									  ->from('campovalor')
									  ->where('valor', '=' , $senha)
									  ->and_where('codpagina', '=', 4)
									  ->execute()->as_array();
									  
							
			if(count($querySenha) == 1 && count($queryEmail) == 1){
				foreach($querySenha as $row) $row = (object) $row;
				
				$_SESSION['logado'] = 1;
			    $_SESSION['email'] = $email;
		        $_SESSION['codconteudo'] = $row->codconteudo;
		      
				$this->redirect(URL::base(true).'home');
		       
			} else{
				
				$this->redirect(URL::base(true).'login/index/login-incorreto');
			}
		}
		$vw = new View('login');		
		$vw->header = Headers::header();
		$vw->footer = Headers::footer();
		$vw->head = Headers::head('Login', 'Sistema Duro PVC | login');
		$vw->retorno = $get;
		
		$this->response->body($vw);
			
		
	}
	public function action_logout(){
		session_destroy();
		$this->redirect(URL::base(true).'login');
	}
	
	
	
		
	
}
	
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Downloads extends Controller {

	public function before(){
        session_name("Login"); 
		session_start();
	if(!isset($_SESSION['logado'])){
			$this->redirect(URL::base(true).'login/');
		}
    }
    
	

		//pega o primeiro argumento
	public function action_index(){
		$this->action_arquivos();
	}
	
	public function action_arquivos(){
		$arquivos 	 = NULL;
		$arquivosexc = NULL;
		$codusu 	 = $_SESSION['codconteudo'];
		
		
							 
							 
		//arquivos comuns
		$qryArq = Cms::arquivos(NULL,2);
	
		foreach ($qryArq as $arq){
		 	$arq = (object) $arq;
		 	
		 	$vwarq 				= new View('downloads/arquivos');
			$vwarq->nome 		= $arq->nome;
			$vwarq->arquivo		= $arq->arquivo;
			$arquivos 		   .= $this->response->body($vwarq);
		}
		
		//arquivos exclusivos
		$qryArq2 = Cms::arquivos($codusu,4);
		
		foreach ($qryArq2 as $arq2){
			$arq2 = (object) $arq2;
			
			$vwarq2 				= new View('downloads/arquivosexc');
			$vwarq2->nome 			= $arq2->nome;
			$vwarq2->arquivo		= $arq2->arquivo;
			$arquivosexc 		   .= $this->response->body($vwarq2);
			
			
		}
		
		
		
		$vw = new View('downloads/download');	
		$vw->arquivos	 = $arquivos;	
		$vw->arquivosexc = $arquivosexc;
		$vw->header 	 = Headers::header();
		$vw->footer 	 = Headers::footer();
		$vw->head		 = Headers::head('Downloads', 'Sistema Duro PVC | Downloads');
		$this->response->body($vw);
	}


	
}

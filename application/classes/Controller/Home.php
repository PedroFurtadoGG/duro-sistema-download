<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function before(){
        session_name("Login"); 
		session_start();
		
		//verificar se tem sessao de login
		if(!isset($_SESSION['logado'])){
			$this->redirect(URL::base(true).'login/');
		}
    }
	
	public function action_index(){
		$this->action_posts();
	}

	public function action_posts(){

		$pag  	 = (int) ($this->request->param("arg1"))? $this->request->param("arg1") : 1;
		$slug 	 = (int) ($this->request->param('arg2'))? $this->request->param('arg2') : 2;
		
		$limit = 12;

		$sqltotal = Cms::conteudoPaginacao(1,$slug);

		$total = count($sqltotal);
		$paginacao = new Pagination(array('uri_segment'    => '/home/posts', // link -> action
								          'total_items'    => $total, // total de registro
								          'items_per_page' => $limit, // registro por pagina
								          'current_page'   => $pag, // pg atal
								          'style'          => 'digg', // template
								          'auto_hide'      => TRUE,));

		$pagina = $paginacao->sql_limit();
		

		$postsleft 	= NULL;
		$categoria 	= NULL;
		$postmain = NULL;
		$postsidebar = NULL;
		
		$qrySide = Cms::conteudoPaginacao(1,NULL,4, 'ORDER BY ctn.codconteudo ',NULL);
		
		foreach($qrySide as $side){
			$side = (object) $side;
				
				$vwside 			= new View('home/noticias-sidebar');
				$vwside->titulo		= $side->titulo;
				$vwside->slug 		= $side->slug;
				
				$vwside->categoria	= $side->categoria;
				$vwside->dtcadastro = Help::dataBR($side->dtcadastro);
				$vwside->img 		= $side->dir.$side->img;
				
			
				$postsidebar .= $this->response->body($vwside);
		}
		
		$qrymain = Cms::conteudoPaginacao(1, NULL,1, 'ORDER BY ctn.codconteudo ASC', NULL, $pagina);
	
		foreach ($qrymain as $main)	$main = (object) $main;
			
			$vwMain = new View('home/post-main');
			$vwMain->titulo = $main->titulo;
			$vwMain->subtitulo = $main->subtitulo;
			$vwMain->categoria = $main->categoria;
			$vwMain->dtcadastro = Help::dataBR($main->dtcadastro);
			$vwMain->slug = $main->slug;
			$vwMain->slugcat = $main->slugcat;
			$vwMain->img = $main->dir.$main->img;
			$postmain .= $this->response->body($vwMain);
		
	
		
		$sqlcat 	= Cms::categoria(1);
			
		foreach ($sqlcat as $cat){

			$cat = (object) $cat;
			
			$vwcat 				= new View('home/categorias');
			$vwcat->slug 		= $cat->slug;
			$vwcat->categoria 	= $cat->categoria;
			$categoria 		   .= $this->response->body($vwcat);
		}
	$qry = Cms::conteudoPaginacao(1, NULL, 8, 'ORDER BY ctn.codconteudo DESC', NULL, $pagina);
		if(count($qry) > 0){ 
			
			foreach ($qry as $val){

				$val = (object) $val;
				
				$vwpost 			= new View('home/noticias-left');
				$vwpost->titulo 	= $val->titulo;
				$vwpost->categoria 	= $val->categoria;
				$vwpost->slug 		= $val->slug;
				$vwpost->slugcat 	= $val->slugcat;
				$vwpost->dtcadastro = Help::dataBR($val->dtcadastro);
				$vwpost->img		= $val->dir.$val->img;
				
			
				$postsleft .= $this->response->body($vwpost);
			}
		
			$paginacao	= $paginacao->__toString();
		}else{
			$postsleft = '';
			$paginacao	= '';
		}	
	
	
		$vw 			= new View('home/index');		
		$vw->header 	= Headers::header();
		$vw->footer 	= Headers::footer();
		$vw->head 		= Headers::head('home', 'Sistema Duro PVC | Home');
		$vw->paginacao 	= $paginacao;
		
		$vw->postsleft 	= $postsleft;
		$vw->postmain = $postmain;
		$vw->postsidebar = $postsidebar;
		$vw->categoria = $categoria;
		$this->response->body($vw);
		
	}
	
	
	
	
}

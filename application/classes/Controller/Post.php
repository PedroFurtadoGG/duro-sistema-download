<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Post extends Controller {

	public function before(){
        session_name("Login"); 
		session_start();
		
		//verificar se tem sessao de login
		if(!isset($_SESSION['logado'])){
			$this->redirect(URL::base(true).'login/');	
		}
    }
    
	public function action_index(){
		$this->action_noticia();
	}
	
	public function action_noticia(){
		
		$slug = ($this->request->param('arg1'))? $this->request->param('arg1') : $this->redirect(URL::base(true).'home/');
		$post = NULL;
		
		$postsidebar = NULL;
		
		$qrySide = Cms::conteudoPrincipal(1,NULL,4, 'ORDER BY ctn.codconteudo ',NULL);
		foreach($qrySide as $side){
			$side = (object) $side;
				
				$vwside 			= new View('noticias/noticias-relacionadas');
				$vwside->titulo		= $side->titulo;
				$vwside->slug 		= $side->slug;
				$vwside->dtcadastro = Help::dataBR($side->dtcadastro);
				$vwside->img 		= $side->dir.$side->img;
				
			
				$postsidebar .= $this->response->body($vwside);
		}
		

		
		$qryPost = Cms::conteudoPrincipal(1, $slug);
		$post = NULL;
		//noticia principal
		foreach ($qryPost as $sg) $sg = (object) $sg;
		
		$vw 				= new View('noticias/blog-interna');
		$vw->titulo 		= $sg->titulo;
		$vw->subtitulo 		= $sg->subtitulo;
		$vw->texto 			= $sg->texto;
		$vw->dtcadastro		= Help::dataBR($sg->dtcadastro);
		$vw->slug 			= $sg->slug;
		$vw->slugcat		= $sg->slugcat;
		$vw->categoria  	= $sg->categoria;
		$vw->img 			= $sg->dir.$sg->img;
	
		$vw->header 		= Headers::header();
		$vw->footer 		= Headers::footer();
		$vw->head 			= Headers::head('noticias', 'Sistema Duro PVC | Noticias');
		$vw->post 			= $post;
		$vw->postsidebar	= $postsidebar;

		$this->response->body($vw);
		
	}
	
	public function action_categoria(){

		$slugcat = ($this->request->param("arg1"))? $this->request->param("arg1") : $this->redirect(URL::base(true).'home/');
		$pag  	 = (int) ($this->request->param("ar2"))? $this->request->param("arg2") : 1;
		$limit 	 = 12;

		$sqltotal = Cms::conteudoCategoria(1, $slugcat);

		$total = count($sqltotal);
		$paginacao = new Pagination(array('uri_segment'    => '/categorias/posts', // link -> action
								          'total_items'    => $total, // total de registro
								          'items_per_page' => $limit, // registro por pagina
								          'current_page'   => $pag, // pg atal
								          'style'          => 'digg', // template
								          'auto_hide'      => TRUE,));

		$pagina = $paginacao->sql_limit();

		$qry = Cms::conteudoCategoria(1, $slugcat, NULL, $pagina);

		$postsleft 	= NULL;
		$categoria 	= NULL;
		$postmain = NULL;
		$postsidebar = NULL;

		$qrySide = Cms::conteudoCategoria(1, $slugcat);

		foreach($qrySide as $side){
			$side = (object) $side;

				$vwside = new View('categorias/noticias-sidebar');
				$vwside->titulo = $side->titulo;
				$vwside->slug = $side->slug;
				$vwside->slugcat = $side->slugcat;
				$vwside->categoria = $side->categoria;
				$vwside->dtcadastro = Help::dataBR($side->dtcadastro);
				$vwside->img = $side->dir.$side->img;			
				$postsidebar .= $this->response->body($vwside);
		}
		
		$qrymain = Cms::conteudoCategoria(1, $slugcat);
	
		
		$sqlcat 	= Cms::categoria(1);
			
		foreach ($sqlcat as $cat){

			$cat = (object) $cat;
			
			$vwcat = new View('categorias/categorias');
			$vwcat->slug = $cat->slug;
			$vwcat->categoria = $cat->categoria;
			$categoria .= $this->response->body($vwcat);
		}
	
		if(count($qry) > 0){ 
			
			foreach ($qry as $val){

				$val = (object) $val;
				
				$vwpost = new View('categorias/noticias-left');
				$vwpost->titulo = $val->titulo;
				$vwpost->categoria = $val->categoria;
				$vwpost->slug = $val->slug;
				$vwpost->slugcat = $val->slugcat;
				$vwpost->dtcadastro = Help::dataBR($val->dtcadastro);
				$vwpost->img = $val->dir.$val->img;
				
			
				$postsleft .= $this->response->body($vwpost);
			}
		
			$paginacao	= $paginacao->__toString();
		}else{
			$postsleft = '';
			$paginacao	= '';
		}	
	
	
		$vw 			 = new View('categorias/index');		
		$vw->header 	 = Headers::header();
		$vw->footer 	 = Headers::footer();
		$vw->head 		 = Headers::head('categorias', 'Sistema Duro PVC | Categorias');
		$vw->paginacao   = $paginacao;
		$vw->postsleft 	 = $postsleft;
		$vw->postsidebar = $postsidebar;
		$vw->categoria 	 = $categoria;
		$this->response->body($vw);
		
	}
	
	public function action_busca(){
		
		$noticia = NULL;
		$categoria = NULL;
		if(!empty($_POST)){
			if($_POST['busca'] != ''){
				$post = $_POST['busca'];
				
			}
		}
		
		$qry = Cms::conteudoBusca(1,$post);
		
		
		foreach($qry as $content){
			$content = (object) $content;
			
			$vwcontent		   = new View('busca/noticias');
			$vwcontent->titulo = $content->titulo;
			$vwcontent->slug   = $content->slug;
			$vwcontent->img		= $content->dir.$content->img;
			$noticia .= $this->response->body($vwcontent);
		}
		
		$sqlcat 	= Cms::categoria(1);
			
		foreach ($sqlcat as $cat){

			$cat = (object) $cat;
			
			$vwcat 				= new View('busca/categorias');
			$vwcat->slug 		= $cat->slug;
			$vwcat->categoria 	= $cat->categoria;
			$categoria 		   .= $this->response->body($vwcat);
		}
		
	
		$vw 			= new View('busca/index');		
		$vw->header 	= Headers::header();
		$vw->footer 	= Headers::footer();
		$vw->head 		= Headers::head('noticia', 'Sistema Duro PVC | Noticia');
		$vw->noticia	= $noticia;
		$vw->categoria	= $categoria;
		
		$this->response->body($vw);
		
	}
	
	public function action_addcomentario(){
		
	
		
	}
}

<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Cms {

	public static function conteudoPrincipal($cod, $slug = NULL, $limit = NULL, $order = NULL, $condicao = NULL){
		
		$sql = "
			SELECT DISTINCT ctn.codconteudo
			, ctn.codcategoria
			, ctn.codsubcategoria
			, ctn.codpagina
			, ctn.slug
			, ctn.titulo
			, ctn.subtitulo
			, ctn.texto
			, ctn.dtcadastro
			, ctn.title
			, ctn.description
			, (SELECT img.imagem FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo ORDER BY listorder ASC LIMIT 1) as img
			, (SELECT img.url FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as dir
			, (SELECT cat.slug FROM categoria AS cat WHERE cat.codcategoria = ctn.codcategoria LIMIT 1) as slugcat
			, (SELECT cat.categoria FROM categoria AS cat WHERE cat.codcategoria = ctn.codcategoria LIMIT 1) as categoria
			FROM conteudo AS ctn
			WHERE ctn.codpagina = ".$cod." 
			";
			
		if($slug != NULL) $sql .= " AND ctn.slug = '".$slug."' ";

		if($condicao != NULL) $sql .= " ".$condicao." ";
		
		if($order != NULL){
			$sql .= " ".$order." ";
		}
		
		if($limit != NULL) $sql .= "LIMIT ".$limit." ";
		
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		
		
		return $qry;
			
	}
	
	public static function conteudoPaginacao($cod, $slug = NULL, $limit = NULL, $order = NULL, $condicao = NULL, $offset = NULL){
		
		$sql = "
			SELECT DISTINCT ctn.codconteudo
			, ctn.codcategoria
			, ctn.codsubcategoria
			, ctn.codpagina
			, ctn.slug
			, ctn.titulo
			, ctn.subtitulo
			, ctn.texto
			, ctn.dtcadastro
			, ctn.title
			, ctn.description
			, cat.categoria
			, (SELECT img.imagem FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo ORDER BY listorder ASC LIMIT 1) as img
			, (SELECT img.url FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as dir
			, (SELECT img.tipo FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as tipo
			, (SELECT cat.slug FROM categoria AS cat WHERE cat.codcategoria = ctn.codcategoria LIMIT 1) as slugcat
			FROM conteudo AS ctn
			LEFT JOIN categoria AS cat ON cat.codcategoria = ctn.codcategoria
			WHERE ctn.codpagina = ".$cod." 
			";
			
		if($slug != NULL) $sql .= " AND ctn.slug = '".$slug."' ";
		
		if($condicao != NULL) $sql.= " ".$condicao." ";
		
		if($order != NULL){
			$sql .= " ".$order." ";
		}
		
		if($offset != NULL){
			$sql .= $offset; 
		}else{
			if($limit != NULL){
				$sql .= "LIMIT ".$limit." "; 
			} 
		}

		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();

		return $qry;

	}
	
	public static function conteudoBusca($cod = NULL, $post = NULL, $offset = NULL){

		$sql = "SELECT DISTINCT ctn.slug
			, ctn.codconteudo
			, ctn.titulo
			, ctn.subtitulo
			, ctn.texto
			, ctn.codpagina
			, (SELECT img.imagem FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo ORDER BY listorder ASC LIMIT 1) as img
			, (SELECT img.url FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as dir
			FROM conteudo AS ctn
			WHERE 1=1 ";

		if($post != NULL) $sql .= " AND ctn.titulo LIKE '%".$post."%' ";
		
		if($cod != NULL) $sql .= " AND ctn.codpagina = '".$cod."' ";

		if($offset != NULL){
			$sql .= $offset; 
		}

		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();

		return $qry;

	}

	public static function conteudoImagem($cod, $slug = NULL, $limit = NULL, $order = NULL, $busca = NULL){
		
		$sql = "SELECT DISTINCT ctn.codconteudo
			, ctn.codcategoria
			, ctn.codsubcategoria
			, ctn.codpagina
			, ctn.slug
			, ctn.titulo
			, ctn.subtitulo
			, ctn.texto
			, ctn.dtcadastro
			, ctn.title
			, ctn.description
			, (SELECT img.imagem FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo ORDER BY listorder ASC LIMIT 1) as img
			, (SELECT img.url FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as dir
			, (SELECT img.tipo FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as tipo
			FROM conteudo AS ctn
			WHERE ctn.codpagina = ".$cod." 
			";
			
		if($slug != NULL) $sql .= " AND ctn.slug = '".$slug."' ";

		if($busca != NULL) $sql .= " ".$busca." ";
		
		if($order != NULL){
			$sql .= " ".$order." ";
		}
		
		if($limit != NULL) $sql .= "LIMIT ".$limit." ";
		
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		
		return $qry;
			
	}
	
	public static function conteudoCategoria($cod, $cat = NULL, $slug = NULL, $pagicacao = NULL){
		
		$sql = "
			SELECT DISTINCT ctn.codconteudo
			, ctn.codcategoria
			, ctn.codsubcategoria
			, ctn.codpagina
			, ctn.slug
			, ctn.titulo
			, ctn.subtitulo
			, ctn.texto
			, ctn.dtcadastro
			, ctn.title
			, ctn.description
			, (SELECT img.imagem FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo ORDER BY listorder ASC LIMIT 1) as img
			, (SELECT img.url FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as dir
			, (SELECT img.tipo FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as tipo
			, cat.slug AS slugcat
			, cat.categoria
			, cat.classe
			FROM conteudo AS ctn
			LEFT JOIN categoria AS cat ON cat.codcategoria = ctn.codcategoria
			WHERE ctn.codpagina = ".$cod." 
			";
			
		if($cat != NULL){
			$sql .= " AND cat.slug = '".$cat."' ";
		}
		
		if($slug != NULL){
			$sql .= " AND ctn.slug = '".$slug."' ";
		}
		
		$sql .= " ORDER BY ctn.listorder ASC";
		
		if($pagicacao != NULL){
			$sql .= $pagicacao;
		}
		
		
		
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
				
		return $qry;
	}
	
	
	public static function conteudoSubCategoria($cod, $cat, $sub){
		
		$sql = "
			SELECT DISTINCT ctn.codconteudo
			, ctn.codcategoria
			, ctn.codsubcategoria
			, ctn.codpagina
			, ctn.slug
			, ctn.titulo
			, ctn.subtitulo
			, ctn.texto
			, ctn.dtcadastro
			, ctn.title
			, ctn.description
			, (SELECT img.imagem FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo ORDER BY listorder ASC LIMIT 1) as img
			, (SELECT img.url FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as dir
			, (SELECT img.tipo FROM imagens AS img WHERE img.codconteudo = ctn.codconteudo LIMIT 1) as tipo
			, cat.slug AS slugcat
			, cat.categoria
			, cat.classe
			FROM conteudo AS ctn
			LEFT JOIN categoria AS cat ON cat.codcategoria = ctn.codcategoria
			WHERE ctn.codpagina = {$cod} AND ctn.codcategoria = {$cat} AND ctn.codsubcategoria = {$sub}";
		
		
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
				
		return $qry;
	}
	
	public static function campoGenerico($codpagina, $codconteudo, $campo = NULL){
		$sql = "SELECT 
				cmg.nome
				, cmp.valor
				FROM campovalor AS cmp
				INNER JOIN campogenerico AS cmg ON cmg.codcampo = cmp.codcampo AND cmg.codpagina = ".$codpagina."
				WHERE cmp.codconteudo = ".$codconteudo;
		if($campo != NULL) $sql .= " AND cmg.campo = '".$campo."' ";
		
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		return $qry;
	}
	
	/*public static function comentarios($codcomentario, $nome, $nota = NULL, $ativo, $codconteudo ,$email){
		$sql = "SELECT
				com.codcomentario
				, com.nome
				, com.nota
				, com.ativo
				, com.codconteudo
				, com.email
				FROM  comentarios as com
				WHERE com.codconteudo = ".$codconteudo;
				"
		"
	}*/

	public static function imagens($codconteudo, $tipo = NULL){
		$sql = "SELECT img.imagem, img.url, img.diretorio, img.title, CONCAT(img.url, img.imagem) as img
				FROM imagens AS img 
				WHERE img.codconteudo = ".$codconteudo;
		if($tipo != NULL) $sql .= " AND img.tipo = '".$tipo."' ";
		$sql .= " ORDER BY img.listorder ASC; ";
		
		
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		return $qry;
	}
	
	public static function arquivos($codconteudo = NULL, $codpagina = NULL){
		
		$sql = "SELECT arq.nome, CONCAT(arq.url, arq.arquivo) as arquivo, con.slug
				FROM arquivos arq
				INNER JOIN conteudo con ON con.codconteudo = arq.codconteudo
				WHERE 1=1 ";
		
		if($codconteudo != NULL){
			$sql .= " AND arq.codconteudo = {$codconteudo} ";
		}
		
		if($codpagina != NULL){
			$sql .= " AND arq.codpagina = {$codpagina} ";
		}
	
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		return $qry;
	}
	
	public static function categoria($cod, $slug = NULL){
		
		$sql = "SELECT codcategoria, categoria, listorder, slug, classe FROM categoria WHERE codpagina = ".$cod." ";
		if($slug != NULL){
			$sql .= " AND slug = '".$slug."' ";
		}
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		
		return $qry;
		
	}
	
	public static function subcategoria($codcategoria){
		
		$sql = "SELECT codcategoria, codsubcategoria, subcategoria FROM subcategoria WHERE codcategoria = ".$codcategoria;
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		return $qry;
		
	}
	

	
	public static function acesso($codpagina = NULL, $codconteudo = NULL){
		
		$protocolo    = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ? 'http' : 'https';
		$host         = $_SERVER['HTTP_HOST'];
		$script       = $_SERVER['SCRIPT_NAME'];
		$UrlAtual     = $protocolo . '://' . $host . $script;
		$ip 		 =  $_SERVER['REMOTE_ADDR'];
		$dtacadastro = date('Y-m-d H:i:s');
				
		$sql = "INSERT INTO relacessos (url, ip, dtacadastro, codpagina, codconteudo) VALUES ('".$UrlAtual."', '".$ip."', '".$dtacadastro."', '".$codpagina."', '".$codconteudo."')";
		$qry = DB::query(Database::INSERT, $sql)->execute()->as_array();
		return $qry;
		
	}
	
	public static function cadEmail($nome, $email){
		$sql = "INSERT INTO listaemail (nome, email, dtacadastro) VALUES ('".$nome."', '".$email."', NOW())";
		$qry = DB::query(Database::INSERT, $sql)->execute()->as_array();
		return $qry;
	}
	
	public static function metatags(){
		$sql = "SELECT keywords, description, title, favicon FROM metatags";
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		return $qry;
	}
	
	public static function metatagsPage($slug){
		$sql = "SELECT description, title FROM conteudo WHERE slug = '".$slug."'";
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		return $qry;
	}
	
	public static function cadComentario($codpagina, $nome, $sobrenome, $email, $comentario, $slug){

		$codpagina			= $codpagina;
		$titulo 			= $nome;
		$subtitulo 			= $sobrenome;
		$dtcadastro 		= date('Y-m-d');
		$texto 				= $comentario;
		$codpagina			= $codpagina;
		
		$sql = "INSERT INTO conteudo (codconteudo, codpagina, slug, titulo, subtitulo, texto, dtcadastro) VALUES
				(".$codconteudo.", ".$codpagina.", '".$slug."', '".$titulo."', '".$subtitulo."', '".$texto."', '".$dtcadastro."')";
		 
		$insert = DB::query(Database::INSERT,$sql)->execute()->as_array();
		
		$sql2 = "SELECT codcampo, campo FROM campogenerico WHERE codpagina = ".$codpagina;
		$qry = DB::query(Database::SELECT,$sql2);
		
		foreach ($qry as $campo){
			$codcampo = $campo['codcampo'];
			$nomcampo = $campo['campo'];
			
			if($nomcampo == 'ativo'){
				$valor = 'N';
			}else if($nomcampo == 'email'){
				$valor = $email;
			}else{
				$valor = $slug;
			}

			$insertvalor = DB::query(Database::INSERT,"INSERT INTO campovalor (codcampo, valor, codconteudo, codpagina)
							VALUES ('".$codcampo."', '".$valor."', '".$codconteudo."', '".$codpagina."')");
			
		}

	}
		
}

?>

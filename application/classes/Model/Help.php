<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Help {

	public static function getOptions($opcoes, $sel = NULL) {
		$lista = NULL;

		foreach ($opcoes as $opcao) {
			$opcao = (object) $opcao;
			$lista .= "\n";
			$lista .= "<option value='".$opcao->codigo."'".(($opcao->codigo == $sel)? " selected='selected'" : "").">";
			$lista .= $opcao->valor;
			$lista .= "</option>";
		}
		return $lista;
	}

	public static function dataBR($data){
		$nDate 	= implode('/', array_reverse(explode('-', $data)));
		return $nDate;
	}

	public static function dataUS($data){
		$nDate 	= implode('-', array_reverse(explode('/', $data)));
		return $nDate;
	}
	
	public static function dataInvertUS($data){
		$nDate 	= array_reverse(explode('-', $data));
		
		$nDate = $nDate[0].'-'.$nDate[1].'-'.$nDate[2]; 
		
		return $nDate;
	}

	public static function dataTimeBR($data){
		$datatime = explode(' ', $data);
		$data	= $datatime[0];
		$nDate 	= implode('/', array_reverse(explode('-', $data)));
		return $nDate;
	}

	public static function dataHourBR($data){
		$datatime = explode(' ', $data);
		$data	= $datatime[1];
		return $data;
	}
	
	public static function dataMes($data){
		$data = explode('-', $data);
		
		$ano = (int) $data[0];
		$mes = (int) $data[1];
		$dia = (int) $data[2];

		$meses = array (1 => "JAN", 2 => "FEV", 3 => "MAR", 4 => "ABR", 5 => "MAI", 6 => "JUN", 7 => "JUL", 8 => "AGO", 9 => "SET", 10 => "OUT", 11 => "NOV", 12 => "DEZ");
		$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
		$hoje = getdate();
		$dia = $dia;
		$mes = $mes;
		$nomemes = $meses[$mes];
		$ano = $ano;
		$diadasemana = $hoje["wday"];
		$nomediadasemana = $diasdasemana[$diadasemana];
		
		return $nomemes;
	}
	
	public static function dataSem($data){
		$data = explode('-', $data);
		
		$ano = (int) $data[0];
		$mes = (int) $data[1];
		$dia = (int) $data[2];

		$meses = array (1 => "JAN", 2 => "FEV", 3 => "MAR", 4 => "ABR", 5 => "MAI", 6 => "JUN", 7 => "JUL", 8 => "AGO", 9 => "SET", 10 => "OUT", 11 => "NOV", 12 => "DEZ");
		$diasdasemana = array (1 => "SEG",2 => "TER",3 => "QUA",4 => "QUI",5 => "SEX",6 => "SAB",0 => "DOM");
		$hoje = getdate();
		$dia = $dia;
		$mes = $mes;
		$nomemes = $meses[$mes];
		$ano = $ano;
		$diadasemana = $hoje["wday"];
		$nomediadasemana = $diasdasemana[$diadasemana];
		
		return $nomediadasemana;
	}
	
	public static function dataExt($data){
		
		$data = explode('-', $data);
		
		$ano = (int) $data[0];
		$mes = (int) $data[1];
		$dia = (int) $data[2];

		$meses = array (1 => "Janneiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
		$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
		$hoje = getdate();
		$dia = $dia;
		$mes = $mes;
		$nomemes = $meses[$mes];
		$ano = $ano;
		$diadasemana = $hoje["wday"];
		$nomediadasemana = $diasdasemana[$diadasemana];
		
		return $dia.' de '.$nomemes.' de '.$ano;
	}
	
	public static function decimal($decimal){
		$decimal = str_replace(".", "", $decimal);
		$decimal = str_replace(",", ".", $decimal);
		$decimal = number_format($decimal / 100, 2, ',', '');
		return $decimal;
	}

	public static function valor($decimal){
		$decimal = str_replace(".", "", $decimal);
		$decimal = number_format($decimal / 100, 2, ',', '.');
		return $decimal;
	}

	public static function fmtDecimal($valor){
		$valor = number_format($valor, "2", ",", ".");
		return $valor;
	}
	
	public static function slug($nome){
		$trocarIsso = array(',', ".","'",'-','(', ')', '!', '?', ' ','à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ü','ú','ÿ','À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','O','Ù','Ü','Ú','Ÿ',);
		$porIsso = array('',"","",'','', '','', '', '-','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','y','A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','N','O','O','O','O','O','o','U','U','U','Y',);
		$titletext = str_replace($trocarIsso, $porIsso, $nome);
		return strtolower($titletext);
	}

	public static function numerico($valor){
		
		$trocarIsso = array(',', ".",'-','(', ')',);
		$porIsso = array('',"",'','','',);
		$value = str_replace($trocarIsso, $porIsso, $valor);
		
		return $value;
	}
	
	public static function geraCod($tabela, $campo){
		$sql = "SELECT ".$campo." FROM ".$tabela." ORDER BY 1 DESC LIMIT 1";
		$qry = DB::query(Database::SELECT, $sql)->execute()->as_array();
		
		if(count($qry) == 0){
			$codigo = 1;
		}else{
			$rs = '';
			foreach ($qry as $rs) $rs = (object) $rs;
			$codigo = $rs->$campo + 1;
		}
		return $codigo;
	}


}

?>

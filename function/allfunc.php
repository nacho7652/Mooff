<?php 


	if (!empty($_SERVER['DOCUMENT_ROOT'])){
      define('ABSPATH', $_SERVER['DOCUMENT_ROOT'].'/');
    } else {
      define('ABSPATH', dirname(dirname(__FILE__)).'/');
    }


	header('Content-Type: text/html; charset=UTF-8');
	date_default_timezone_set('America/Santiago');
	error_reporting(0);

	require_once(ABSPATH.'DAL/Connect.php');


	function sqlconnect()
	{
		
		$conexion= @mysql_connect(DB_HOST,DB_USER,DB_PASS);
		if (!$conexion){
			echo("Error al conectar con el servidor");
			exit();
		}

		if(!mysql_select_db(DB_NAME, $conexion)) {
			echo("Error al seleccionar la base de datos");
			exit();
		}
		
	}


	function sqlclose()
	{
		mysql_close();
	}

	function sqlquery($sql)
	{
		sqlconnect();
		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET time_zone = '-4:00'");
		$rst = mysql_query($sql) or die(mysql_error());
		sqlclose();
		return  $rst;
	}


	function removeCode($str){
		$busqueda = array (	 '@<script[^>]*?>.*?</script>@si',
			                /* '@<[\/\!]*?[^<>]*?>@si', */        
			                 '@([\r\n])[\s]+@',               
			                 '@&(quot|#34);@i',              
			                 '@&(amp|#38);@i',
			                 '@&(lt|#60);@i',
			                 '@&(gt|#62);@i',
			                 '@&(nbsp|#160);@i',
			                 '@&(iexcl|#161);@i',
			                 '@&(cent|#162);@i',
			                 '@&(pound|#163);@i',
			                 '@&(copy|#169);@i',
			                 '@&#(\d+);@e');                   
		
		$reemplazar = array ('',
		          /*        '', */
 		                  '\1',
		                  '"',
		                  '&',
		                  '<',
		                  '>',
		                  ' ',
		                  chr(161),
		                  chr(162),
		                  chr(163),
		                  chr(169),
		                  'chr(\1)');
		
		$texto = preg_replace($busqueda, $reemplazar, $str);
		return $texto;
	}


	function utf8_safe($string){
		$string = trim($string);
		if(mb_detect_encoding($string)=='UTF-8'){ 
	    	return $string; 
	 	}else{ 
	    	return utf8_encode($string); 
	 	} 
	}


	function quote($string, $on = true){
		//$string = preg_replace("/[']/", "", $string);

		if($on)
			$string = empty($string) ? "''" : "'".$string."'";

		return $string ;
	}


	function clearDir($string, $quote = true, $allowdot = false){
		$string = utf8_safe($string);
		$string = removeCode($string);
		

		$search =  explode(",","Ä,Ë,ï,Ö,Ü,á,à,â,ã,ª,Á,À,Â,Ã,é,è,ê,É,È,Ê,í,ì,î,Í,Ì,Î,ó,ò,ô,õ,º,Ó,Ò,Ô,Õ,ú,ù,û,Ú,Ù,Û,ñ,Ñ");
	 	$replace = explode(",","A,E,I,O,U,a,a,a,a,a,A,A,A,A,e,e,e,E,E,E,i,i,i,I,I,I,o,o,o,o,o,O,O,O,O,u,u,u,U,U,U,n,N");
		$string = str_replace($search, $replace, $string);

		$string = preg_replace("/[^a-zA-Z0-9_ \.-]/", "_", $string);

		if(!$allowdot)
			$string = strtr($string, array("." => "_"));

		$string = trim($string);
		$string = strtr($string, array(" " => "-"));

		$search =  array("/[-\s]+/","/[_\s]+/","/(_-)+/","/(-_)+/","/^[\-_\s]+/","/[\-_\s]+$/");
	 	$replace = array("-"	   ,"_"       ,"-"      ,"-"      ,""           ,"");
		
		$string = preg_replace($search, $replace, $string);

		return ($quote) ? quote($string) : $string;
	}

	function clearMail($string, $quote = true){
		$string = removeCode($string);
		$string = utf8_safe($string);		

		$string = preg_replace("/[^a-zA-Z0-9@_\.-]/", "", $string);

		return ($quote) ? quote($string) : $string;
	}


	function clearInt($string, $quote = false){
		if ( $string === NULL){
			return 'NULL';
		}

		$string = utf8_safe($string);	
		$string = removeCode($string);
			

		$string = preg_replace("/[^0-9]/", "", $string);
		$string = empty($string) ? 0 : $string;

		return ($quote) ? quote($string) : $string;
	}

	function safeForDB($string, $quote = true){
		$string = utf8_safe($string);	
		$string = removeCode($string);
		

		$array = array(
					        "\0" => "",
					        "'"  => "&#39;",
					        "\"" => "&#34;",
					        "\\" => "&#92;",
					        "<"  => "&lt;",
					        ">"  => "&gt;",
					    );

		$string = strtr($string, $array );

		if (function_exists('addslashes'))
           	$string = addslashes($string);
        else
	        $string = mysql_real_escape_string($string);

		return ($quote) ? quote($string) : $string;
	}

	function checkRut($string, $quote = true){
		$string = utf8_safe($string);	
		$string = removeCode($string);
		
		$string = preg_replace("/[^0-9kK-]/", "", $string);

		if(strpos($string,"-")==false){
	        $RUT[0] = substr($string, 0, -1);
	        $RUT[1] = substr($string, -1);
	    }else{
	        $RUT = explode("-", trim($string));
	    }

	    $elRut = trim($RUT[0]);
	    $factor = 2;
	    for($i = strlen($elRut)-1; $i >= 0; $i--):
	        $factor = $factor > 7 ? 2 : $factor;
	        $suma += $elRut{$i}*$factor++;
	    endfor;
	    $resto = $suma % 11;
	    $dv = 11 - $resto;
	    if($dv == 11){
	        $dv=0;
	    }else if($dv == 10){
	        $dv="k";
	    }else{
	        $dv=$dv;
	    }
	   if($dv == trim(strtolower($RUT[1]))){
	       return ($quote) ? quote($RUT[0].'-'.$RUT[1]) : $RUT[0].'-'.$RUT[1];
	   }else{
	       return false;
	   }

		
	}




?>
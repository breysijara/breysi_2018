<?php

class suscription{

	function verificar($id){
		if (isset($id)) {
			return "Bienvenido";
		}
		
	}
	
	function arrayAdded($array){
	$result=0;
		if($array !=null )
		foreach($array as $item){
			if( is_numeric($item) )
				$result+=$item;
		}
		return $result;
	}
}

?>
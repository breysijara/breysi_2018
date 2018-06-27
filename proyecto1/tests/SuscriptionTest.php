<?php
use PHPUnit\Framework\TestCase;


final class SuscripcionTest extends TestCase{

	public function testVerificar():void{
		include_once "src/suscription.php";
		$suscription=new suscription();
		$this->assertEquals(  $verificar->add(5), "Bienvenido");
	}

}

	
?>
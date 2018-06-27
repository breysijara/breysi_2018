<?php
use PHPUnit\Framework\TestCase;
	final /**
	* 
	*/
	class Facttest extends TestCase
	{
		
		public function testHavedni ():void
		{
			include_once "scr/facturacion.php";
			$facturacion = new fact();
			$this->assertContains($facturacion->havedni("76523961"),"76523961");
		}
	}
?>
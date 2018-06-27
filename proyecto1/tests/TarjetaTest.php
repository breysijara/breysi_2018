<?php
use PHPUnit\Framework\TestCase;
	final 	class TarjetaTest extends TestCase
	{
		
		public function testTarjeta ():void
		{
			include_once "scr/tarjeta.php";
			$tarjeta = new ValidateCreditCard();
			$this->assertContains($tarjeta->validateFormatCreditCard("4594439577977162"),"4594439577977162");
		}
	}
?>
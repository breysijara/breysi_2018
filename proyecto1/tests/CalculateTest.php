<?php
use PHPUnit\Framework\TestCase;


final class CalculateTest extends TestCase{

	public function testDivide():void{

		$calculate=new Calculate();
		$this->assertEquals(  $calculate->divide(10,2),5);
	}


	public function testDivide1():void{

		$calculate=new Calculate();
		$this->assertEquals(  $calculate->divide(50,10),5);
	}


	public function testDivide2():void{

		$calculate=new Calculate();
		$this->assertEquals(  $calculate->divide(40,), "Denominador incorrecto" );
	}

	
}
?>
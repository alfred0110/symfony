<?php


namespace Tests\DemoBundle\Utility;

use DemoBundle\Utility\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
  public function testAdd()
  {
    $calc =new Calculator();
    $result = $calc->add(30,12);

    //¡Acierta nuestra calculadora suma de dos numeros!
    $this->assertEquals(42, $result);
  }

}

<?php
/**
 * Created by PhpStorm.
 * User: ml
 * Date: 9/11/19
 * Time: 12:13 PM
 */

namespace App\Tests;

use App\Controller\ExampleController;
use PHPUnit\Framework\TestCase;

/**
 * Class TestExample
 *
 * @package App\Tests
 */
class ExampleControllerTest extends TestCase
{
	/**
	 * @test
	 */
	public function testExample()
	{
		$controller = new ExampleController();
		$this->assertTrue($controller->exampleTest());
	}
}
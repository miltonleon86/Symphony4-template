<?php
/**
 * Created by PhpStorm.
 * User: ml
 * Date: 9/11/19
 * Time: 12:18 PM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class ExampleController
 *
 * @package App\Controller
 */
class ExampleController extends AbstractController
{
	public function viewTest()
	{
		return $this->json(['status' => '200']);
	}

	public function exampleTest()
	{
		return true;
	}
}
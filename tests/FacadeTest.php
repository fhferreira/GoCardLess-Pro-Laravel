<?php

/**
 * Part of the Stripe Laravel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe Laravel
 * @version    1.0.3
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2015, Cartalyst LLC
 * @link       http://cartalyst.com
 */

namespace Fhferreira\GoCardLess\Tests;

use ReflectionClass;
use PHPUnit_Framework_TestCase;

class FacadeTest extends PHPUnit_Framework_TestCase {

	/** @test */
	public function it_can_test_it_is_a_facade()
	{
		$facade = new ReflectionClass('Illuminate\Support\Facades\Facade');

		$reflection = new ReflectionClass('Fhferreira\GoCardLess\Facades\GoCardLess');

		$this->assertTrue($reflection->isSubclassOf($facade));
	}

	/** @test */
	public function it_can_test_it_is_a_facade_accessor()
	{
		$reflection = new ReflectionClass('Fhferreira\GoCardLess\Facades\GoCardLess');

		$method = $reflection->getMethod('getFacadeAccessor');
		$method->setAccessible(true);

		$this->assertEquals('gocardless', $method->invoke(null));
	}

}

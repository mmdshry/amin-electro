<?php

/**
 * @license LGPLv3, https://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2021
 */


namespace Aimeos\MShop\Cms\Manager;


/**
 * Test class for \Aimeos\MShop\Cms\Manager\Factory.
 */
class FactoryTest extends \PHPUnit\Framework\TestCase
{
	public function testCreateManager()
	{
		$manager = \Aimeos\MShop\Cms\Manager\Factory::create( \TestHelperMShop::getContext() );
		$this->assertInstanceOf( \Aimeos\MShop\Common\Manager\Iface::class, $manager );
	}


	public function testCreateManagerName()
	{
		$manager = \Aimeos\MShop\Cms\Manager\Factory::create( \TestHelperMShop::getContext(), 'Standard' );
		$this->assertInstanceOf( \Aimeos\MShop\Common\Manager\Iface::class, $manager );
	}


	public function testCreateManagerInvalidName()
	{
		$this->expectException( \Aimeos\MShop\Cms\Exception::class );
		\Aimeos\MShop\Cms\Manager\Factory::create( \TestHelperMShop::getContext(), '%^&' );
	}


	public function testCreateManagerNotExisting()
	{
		$this->expectException( \Aimeos\MShop\Exception::class );
		\Aimeos\MShop\Cms\Manager\Factory::create( \TestHelperMShop::getContext(), 'unknown' );
	}
}

<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\GeocodeComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\GeocodeComponent Test Case
 */
class GeocodeComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\GeocodeComponent
     */
    public $Geocode;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Geocode = new GeocodeComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Geocode);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

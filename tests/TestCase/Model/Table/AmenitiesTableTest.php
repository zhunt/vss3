<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AmenitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AmenitiesTable Test Case
 */
class AmenitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AmenitiesTable
     */
    public $Amenities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.amenities',
        'app.venues',
        'app.amenities_venues'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Amenities') ? [] : ['className' => 'App\Model\Table\AmenitiesTable'];
        $this->Amenities = TableRegistry::get('Amenities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Amenities);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

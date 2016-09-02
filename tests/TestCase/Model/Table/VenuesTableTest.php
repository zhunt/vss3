<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VenuesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VenuesTable Test Case
 */
class VenuesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VenuesTable
     */
    public $Venues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.venues',
        'app.provinces',
        'app.countries',
        'app.cities',
        'app.images',
        'app.neighbourhoods',
        'app.establishment_types',
        'app.inside_venues',
        'app.amenities',
        'app.amenities_venues',
        'app.cuisines',
        'app.cuisines_venues',
        'app.features',
        'app.features_venues',
        'app.venue_photos',
        'app.venue_photos_venues'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Venues') ? [] : ['className' => 'App\Model\Table\VenuesTable'];
        $this->Venues = TableRegistry::get('Venues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Venues);

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

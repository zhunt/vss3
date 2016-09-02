<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VenuePhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VenuePhotosTable Test Case
 */
class VenuePhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VenuePhotosTable
     */
    public $VenuePhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.venue_photos',
        'app.venues',
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
        $config = TableRegistry::exists('VenuePhotos') ? [] : ['className' => 'App\Model\Table\VenuePhotosTable'];
        $this->VenuePhotos = TableRegistry::get('VenuePhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VenuePhotos);

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

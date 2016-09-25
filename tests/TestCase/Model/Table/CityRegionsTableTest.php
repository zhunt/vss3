<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CityRegionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CityRegionsTable Test Case
 */
class CityRegionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CityRegionsTable
     */
    public $CityRegions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.city_regions',
        'app.countries',
        'app.cities',
        'app.provinces',
        'app.schools',
        'app.image_uploads',
        'app.chains',
        'app.tags',
        'app.articles',
        'app.categories',
        'app.categories2',
        'app.articles_tags',
        'app.companies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CityRegions') ? [] : ['className' => 'App\Model\Table\CityRegionsTable'];
        $this->CityRegions = TableRegistry::get('CityRegions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CityRegions);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProvinceRegionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProvinceRegionsTable Test Case
 */
class ProvinceRegionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProvinceRegionsTable
     */
    public $ProvinceRegions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.province_regions',
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
        $config = TableRegistry::exists('ProvinceRegions') ? [] : ['className' => 'App\Model\Table\ProvinceRegionsTable'];
        $this->ProvinceRegions = TableRegistry::get('ProvinceRegions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProvinceRegions);

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

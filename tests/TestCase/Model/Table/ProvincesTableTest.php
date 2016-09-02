<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProvincesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProvincesTable Test Case
 */
class ProvincesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProvincesTable
     */
    public $Provinces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.provinces',
        'app.countries',
        'app.cities',
        'app.images',
        'app.neighbourhoods',
        'app.venues'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Provinces') ? [] : ['className' => 'App\Model\Table\ProvincesTable'];
        $this->Provinces = TableRegistry::get('Provinces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Provinces);

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

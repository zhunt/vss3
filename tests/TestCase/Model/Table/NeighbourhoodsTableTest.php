<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NeighbourhoodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NeighbourhoodsTable Test Case
 */
class NeighbourhoodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NeighbourhoodsTable
     */
    public $Neighbourhoods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.neighbourhoods',
        'app.cities',
        'app.images',
        'app.provinces',
        'app.countries',
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
        $config = TableRegistry::exists('Neighbourhoods') ? [] : ['className' => 'App\Model\Table\NeighbourhoodsTable'];
        $this->Neighbourhoods = TableRegistry::get('Neighbourhoods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Neighbourhoods);

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

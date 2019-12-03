<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FoodTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FoodTable Test Case
 */
class FoodTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FoodTable
     */
    public $Food;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Food',
        'app.Custtable'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Food') ? [] : ['className' => FoodTable::class];
        $this->Food = TableRegistry::getTableLocator()->get('Food', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Food);

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
}

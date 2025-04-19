<?php
declare(strict_types=1);

namespace Hr\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use Hr\Model\Table\EmployeesTable;

/**
 * Hr\Model\Table\EmployeesTable Test Case
 */
class EmployeesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Hr\Model\Table\EmployeesTable
     */
    protected $Employees;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.Hr.Employees',
        'plugin.Hr.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Employees') ? [] : ['className' => EmployeesTable::class];
        $this->Employees = $this->getTableLocator()->get('Employees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Employees);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \Hr\Model\Table\EmployeesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \Hr\Model\Table\EmployeesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

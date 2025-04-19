<?php
declare(strict_types=1);

namespace PetCare\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use PetCare\Model\Table\LogsTable;

/**
 * PetCare\Model\Table\LogsTable Test Case
 */
class LogsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \PetCare\Model\Table\LogsTable
     */
    protected $Logs;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.PetCare.Logs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Logs') ? [] : ['className' => LogsTable::class];
        $this->Logs = $this->getTableLocator()->get('Logs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Logs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \PetCare\Model\Table\LogsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

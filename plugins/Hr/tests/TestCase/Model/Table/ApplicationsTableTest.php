<?php
declare(strict_types=1);

namespace Hr\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use Hr\Model\Table\ApplicationsTable;

/**
 * Hr\Model\Table\ApplicationsTable Test Case
 */
class ApplicationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Hr\Model\Table\ApplicationsTable
     */
    protected $Applications;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.Hr.Applications',
        'plugin.Hr.JobOffers',
        'plugin.Hr.Candidates',
        'plugin.Hr.Interviews',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Applications') ? [] : ['className' => ApplicationsTable::class];
        $this->Applications = $this->getTableLocator()->get('Applications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Applications);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \Hr\Model\Table\ApplicationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \Hr\Model\Table\ApplicationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

<?php
declare(strict_types=1);

namespace Hr\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use Hr\Model\Table\InterviewsTable;

/**
 * Hr\Model\Table\InterviewsTable Test Case
 */
class InterviewsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Hr\Model\Table\InterviewsTable
     */
    protected $Interviews;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.Hr.Interviews',
        'plugin.Hr.Applications',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Interviews') ? [] : ['className' => InterviewsTable::class];
        $this->Interviews = $this->getTableLocator()->get('Interviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Interviews);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \Hr\Model\Table\InterviewsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \Hr\Model\Table\InterviewsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

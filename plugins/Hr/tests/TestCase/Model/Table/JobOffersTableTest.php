<?php
declare(strict_types=1);

namespace Hr\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use Hr\Model\Table\JobOffersTable;

/**
 * Hr\Model\Table\JobOffersTable Test Case
 */
class JobOffersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Hr\Model\Table\JobOffersTable
     */
    protected $JobOffers;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.Hr.JobOffers',
        'plugin.Hr.Hrs',
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
        $config = $this->getTableLocator()->exists('JobOffers') ? [] : ['className' => JobOffersTable::class];
        $this->JobOffers = $this->getTableLocator()->get('JobOffers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->JobOffers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \Hr\Model\Table\JobOffersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \Hr\Model\Table\JobOffersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

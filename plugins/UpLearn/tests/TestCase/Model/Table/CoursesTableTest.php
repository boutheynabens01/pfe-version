<?php
declare(strict_types=1);

namespace UpLearn\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use UpLearn\Model\Table\CoursesTable;

/**
 * UpLearn\Model\Table\CoursesTable Test Case
 */
class CoursesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \UpLearn\Model\Table\CoursesTable
     */
    protected $Courses;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'plugin.UpLearn.Courses',
        'plugin.UpLearn.Users',
        'plugin.UpLearn.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Courses') ? [] : ['className' => CoursesTable::class];
        $this->Courses = $this->getTableLocator()->get('Courses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Courses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \UpLearn\Model\Table\CoursesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \UpLearn\Model\Table\CoursesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

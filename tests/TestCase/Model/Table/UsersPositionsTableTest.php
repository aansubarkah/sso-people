<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersPositionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersPositionsTable Test Case
 */
class UsersPositionsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_positions',
        'app.users',
        'app.chiefs',
        'app.departements',
        'app.usercareerviews',
        'app.levels',
        'app.positionlevels',
        'app.positions',
        'app.users_positionlevels',
        'app.userlevelviews',
        'app.levels_users',
        'app.roles',
        'app.userroleviews',
        'app.roles_users',
        'app.userdepartementviews',
        'app.chiefs_departements',
        'app.chieves',
        'app.departements_users',
        'app.usereducationviews',
        'app.educations',
        'app.educations_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersPositions') ? [] : ['className' => 'App\Model\Table\UsersPositionsTable'];
        $this->UsersPositions = TableRegistry::get('UsersPositions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersPositions);

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

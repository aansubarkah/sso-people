<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserdepartementviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserdepartementviewsTable Test Case
 */
class UserdepartementviewsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.userdepartementviews',
        'app.departements',
        'app.usercareerviews',
        'app.users',
        'app.chiefs',
        'app.chiefs_departements',
        'app.chieves',
        'app.usereducationviews',
        'app.educations',
        'app.educations_users',
        'app.userlevelviews',
        'app.levels',
        'app.positionlevels',
        'app.positions',
        'app.users_positions',
        'app.users_positionlevels',
        'app.levels_users',
        'app.userroleviews',
        'app.roles',
        'app.roles_users',
        'app.departements_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Userdepartementviews') ? [] : ['className' => 'App\Model\Table\UserdepartementviewsTable'];
        $this->Userdepartementviews = TableRegistry::get('Userdepartementviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userdepartementviews);

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

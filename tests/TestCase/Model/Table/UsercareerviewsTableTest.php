<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsercareerviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsercareerviewsTable Test Case
 */
class UsercareerviewsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usercareerviews',
        'app.users',
        'app.chiefs',
        'app.departements',
        'app.userdepartementviews',
        'app.chiefs_departements',
        'app.chieves',
        'app.departements_users',
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
        'app.roles_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Usercareerviews') ? [] : ['className' => 'App\Model\Table\UsercareerviewsTable'];
        $this->Usercareerviews = TableRegistry::get('Usercareerviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usercareerviews);

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

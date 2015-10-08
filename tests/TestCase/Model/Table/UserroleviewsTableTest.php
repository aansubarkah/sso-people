<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserroleviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserroleviewsTable Test Case
 */
class UserroleviewsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.userroleviews',
        'app.roles',
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
        $config = TableRegistry::exists('Userroleviews') ? [] : ['className' => 'App\Model\Table\UserroleviewsTable'];
        $this->Userroleviews = TableRegistry::get('Userroleviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userroleviews);

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

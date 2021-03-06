<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserlevelviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserlevelviewsTable Test Case
 */
class UserlevelviewsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.userlevelviews',
        'app.levels',
        'app.positionlevels',
        'app.positions',
        'app.users',
        'app.chiefs',
        'app.departements',
        'app.usercareerviews',
        'app.roles',
        'app.userroleviews',
        'app.roles_users',
        'app.userdepartementviews',
        'app.chiefs_departements',
        'app.chieves',
        'app.departements_users',
        'app.usereducationviews',
        'app.educations',
        'app.educations_users',
        'app.levels_users',
        'app.users_positionlevels',
        'app.users_positions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Userlevelviews') ? [] : ['className' => 'App\Model\Table\UserlevelviewsTable'];
        $this->Userlevelviews = TableRegistry::get('Userlevelviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userlevelviews);

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

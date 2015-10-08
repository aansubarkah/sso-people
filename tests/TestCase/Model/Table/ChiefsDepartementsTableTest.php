<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChiefsDepartementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChiefsDepartementsTable Test Case
 */
class ChiefsDepartementsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chiefs_departements',
        'app.chieves',
        'app.departements',
        'app.usercareerviews',
        'app.users',
        'app.chiefs',
        'app.userdepartementviews',
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
        $config = TableRegistry::exists('ChiefsDepartements') ? [] : ['className' => 'App\Model\Table\ChiefsDepartementsTable'];
        $this->ChiefsDepartements = TableRegistry::get('ChiefsDepartements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChiefsDepartements);

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

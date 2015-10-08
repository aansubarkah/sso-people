<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PositionlevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PositionlevelsTable Test Case
 */
class PositionlevelsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.positionlevels',
        'app.positions',
        'app.users',
        'app.chiefs',
        'app.departements',
        'app.usercareerviews',
        'app.levels',
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
        'app.educations_users',
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
        $config = TableRegistry::exists('Positionlevels') ? [] : ['className' => 'App\Model\Table\PositionlevelsTable'];
        $this->Positionlevels = TableRegistry::get('Positionlevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Positionlevels);

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

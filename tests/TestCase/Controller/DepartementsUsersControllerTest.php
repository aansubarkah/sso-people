<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DepartementsUsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DepartementsUsersController Test Case
 */
class DepartementsUsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.departements_users',
        'app.departements',
        'app.usercareerviews',
        'app.users',
        'app.groups',
        'app.chiefs',
        'app.chiefs_departements',
        'app.chieves',
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
        'app.roles_users'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

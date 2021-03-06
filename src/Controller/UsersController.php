<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow('add');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Departements', 'Educations', 'Levels', 'Roles', 'Positionlevels', 'Positions', 'Chiefs', 'Usercareerviews', 'Userdepartementviews', 'Usereducationviews', 'Userlevelviews', 'Userroleviews']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $departements = $this->Users->Departements->find('list', ['limit' => 200]);
        $educations = $this->Users->Educations->find('list', ['limit' => 200]);
        $levels = $this->Users->Levels->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $positionlevels = $this->Users->Positionlevels->find('list', ['limit' => 200]);
        $positions = $this->Users->Positions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'departements', 'educations', 'levels', 'roles', 'positionlevels', 'positions'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Departements', 'Educations', 'Levels', 'Roles', 'Positionlevels', 'Positions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
    } else {
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
    }
    }
    $departements = $this->Users->Departements->find('list', ['limit' => 200]);
    $educations = $this->Users->Educations->find('list', ['limit' => 200]);
    $levels = $this->Users->Levels->find('list', ['limit' => 200]);
    $roles = $this->Users->Roles->find('list', ['limit' => 200]);
    $positionlevels = $this->Users->Positionlevels->find('list', ['limit' => 200]);
    $positions = $this->Users->Positions->find('list', ['limit' => 200]);
    $this->set(compact('user', 'departements', 'educations', 'levels', 'roles', 'positionlevels', 'positions'));
    $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
    } else {
        $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
    }

    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $redirectUri = $this->Auth->redirectUrl();
                if ($this->request->query['redir'] === 'oauth') {
                    $redirectUri = [
                        'plugin' => 'OAuthServer',
                        'controller' => 'OAuth',
                        'action' => 'authorize',
                        '?' => $this->request->query
                    ];
                }
                return $this->redirect($redirectUri);
            } else {
                $this->Flash->error(
                    __('Username or password is incorrect'),
                    'default',
                    [],
                    'auth'
                );
            }
        }
    }
}

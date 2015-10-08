<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersPositionlevels Controller
 *
 * @property \App\Model\Table\UsersPositionlevelsTable $UsersPositionlevels
 */
class UsersPositionlevelsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Positionlevels']
        ];
        $this->set('usersPositionlevels', $this->paginate($this->UsersPositionlevels));
        $this->set('_serialize', ['usersPositionlevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Positionlevel id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersPositionlevel = $this->UsersPositionlevels->get($id, [
            'contain' => ['Users', 'Positionlevels']
        ]);
        $this->set('usersPositionlevel', $usersPositionlevel);
        $this->set('_serialize', ['usersPositionlevel']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersPositionlevel = $this->UsersPositionlevels->newEntity();
        if ($this->request->is('post')) {
            $usersPositionlevel = $this->UsersPositionlevels->patchEntity($usersPositionlevel, $this->request->data);
            if ($this->UsersPositionlevels->save($usersPositionlevel)) {
                $this->Flash->success(__('The users positionlevel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users positionlevel could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersPositionlevels->Users->find('list', ['limit' => 200]);
        $positionlevels = $this->UsersPositionlevels->Positionlevels->find('list', ['limit' => 200]);
        $this->set(compact('usersPositionlevel', 'users', 'positionlevels'));
        $this->set('_serialize', ['usersPositionlevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Positionlevel id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersPositionlevel = $this->UsersPositionlevels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersPositionlevel = $this->UsersPositionlevels->patchEntity($usersPositionlevel, $this->request->data);
            if ($this->UsersPositionlevels->save($usersPositionlevel)) {
                $this->Flash->success(__('The users positionlevel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users positionlevel could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersPositionlevels->Users->find('list', ['limit' => 200]);
        $positionlevels = $this->UsersPositionlevels->Positionlevels->find('list', ['limit' => 200]);
        $this->set(compact('usersPositionlevel', 'users', 'positionlevels'));
        $this->set('_serialize', ['usersPositionlevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Positionlevel id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersPositionlevel = $this->UsersPositionlevels->get($id);
        if ($this->UsersPositionlevels->delete($usersPositionlevel)) {
            $this->Flash->success(__('The users positionlevel has been deleted.'));
        } else {
            $this->Flash->error(__('The users positionlevel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

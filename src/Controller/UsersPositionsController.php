<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersPositions Controller
 *
 * @property \App\Model\Table\UsersPositionsTable $UsersPositions
 */
class UsersPositionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Positions']
        ];
        $this->set('usersPositions', $this->paginate($this->UsersPositions));
        $this->set('_serialize', ['usersPositions']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Position id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersPosition = $this->UsersPositions->get($id, [
            'contain' => ['Users', 'Positions']
        ]);
        $this->set('usersPosition', $usersPosition);
        $this->set('_serialize', ['usersPosition']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersPosition = $this->UsersPositions->newEntity();
        if ($this->request->is('post')) {
            $usersPosition = $this->UsersPositions->patchEntity($usersPosition, $this->request->data);
            if ($this->UsersPositions->save($usersPosition)) {
                $this->Flash->success(__('The users position has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users position could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersPositions->Users->find('list', ['limit' => 200]);
        $positions = $this->UsersPositions->Positions->find('list', ['limit' => 200]);
        $this->set(compact('usersPosition', 'users', 'positions'));
        $this->set('_serialize', ['usersPosition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Position id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersPosition = $this->UsersPositions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersPosition = $this->UsersPositions->patchEntity($usersPosition, $this->request->data);
            if ($this->UsersPositions->save($usersPosition)) {
                $this->Flash->success(__('The users position has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users position could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersPositions->Users->find('list', ['limit' => 200]);
        $positions = $this->UsersPositions->Positions->find('list', ['limit' => 200]);
        $this->set(compact('usersPosition', 'users', 'positions'));
        $this->set('_serialize', ['usersPosition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Position id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersPosition = $this->UsersPositions->get($id);
        if ($this->UsersPositions->delete($usersPosition)) {
            $this->Flash->success(__('The users position has been deleted.'));
        } else {
            $this->Flash->error(__('The users position could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

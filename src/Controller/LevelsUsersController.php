<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LevelsUsers Controller
 *
 * @property \App\Model\Table\LevelsUsersTable $LevelsUsers
 */
class LevelsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Levels', 'Users']
        ];
        $this->set('levelsUsers', $this->paginate($this->LevelsUsers));
        $this->set('_serialize', ['levelsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Levels User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $levelsUser = $this->LevelsUsers->get($id, [
            'contain' => ['Levels', 'Users']
        ]);
        $this->set('levelsUser', $levelsUser);
        $this->set('_serialize', ['levelsUser']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $levelsUser = $this->LevelsUsers->newEntity();
        if ($this->request->is('post')) {
            $levelsUser = $this->LevelsUsers->patchEntity($levelsUser, $this->request->data);
            if ($this->LevelsUsers->save($levelsUser)) {
                $this->Flash->success(__('The levels user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The levels user could not be saved. Please, try again.'));
            }
        }
        $levels = $this->LevelsUsers->Levels->find('list', ['limit' => 200]);
        $users = $this->LevelsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('levelsUser', 'levels', 'users'));
        $this->set('_serialize', ['levelsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Levels User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $levelsUser = $this->LevelsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $levelsUser = $this->LevelsUsers->patchEntity($levelsUser, $this->request->data);
            if ($this->LevelsUsers->save($levelsUser)) {
                $this->Flash->success(__('The levels user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The levels user could not be saved. Please, try again.'));
            }
        }
        $levels = $this->LevelsUsers->Levels->find('list', ['limit' => 200]);
        $users = $this->LevelsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('levelsUser', 'levels', 'users'));
        $this->set('_serialize', ['levelsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Levels User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $levelsUser = $this->LevelsUsers->get($id);
        if ($this->LevelsUsers->delete($levelsUser)) {
            $this->Flash->success(__('The levels user has been deleted.'));
        } else {
            $this->Flash->error(__('The levels user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

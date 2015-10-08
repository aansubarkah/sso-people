<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Positionlevels Controller
 *
 * @property \App\Model\Table\PositionlevelsTable $Positionlevels
 */
class PositionlevelsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Positions']
        ];
        $this->set('positionlevels', $this->paginate($this->Positionlevels));
        $this->set('_serialize', ['positionlevels']);
    }

    /**
     * View method
     *
     * @param string|null $id Positionlevel id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $positionlevel = $this->Positionlevels->get($id, [
            'contain' => ['Positions', 'Users', 'Levels']
        ]);
        $this->set('positionlevel', $positionlevel);
        $this->set('_serialize', ['positionlevel']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $positionlevel = $this->Positionlevels->newEntity();
        if ($this->request->is('post')) {
            $positionlevel = $this->Positionlevels->patchEntity($positionlevel, $this->request->data);
            if ($this->Positionlevels->save($positionlevel)) {
                $this->Flash->success(__('The positionlevel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The positionlevel could not be saved. Please, try again.'));
            }
        }
        $positions = $this->Positionlevels->Positions->find('list', ['limit' => 200]);
        $users = $this->Positionlevels->Users->find('list', ['limit' => 200]);
        $this->set(compact('positionlevel', 'positions', 'users'));
        $this->set('_serialize', ['positionlevel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Positionlevel id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $positionlevel = $this->Positionlevels->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $positionlevel = $this->Positionlevels->patchEntity($positionlevel, $this->request->data);
            if ($this->Positionlevels->save($positionlevel)) {
                $this->Flash->success(__('The positionlevel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The positionlevel could not be saved. Please, try again.'));
            }
        }
        $positions = $this->Positionlevels->Positions->find('list', ['limit' => 200]);
        $users = $this->Positionlevels->Users->find('list', ['limit' => 200]);
        $this->set(compact('positionlevel', 'positions', 'users'));
        $this->set('_serialize', ['positionlevel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Positionlevel id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $positionlevel = $this->Positionlevels->get($id);
        if ($this->Positionlevels->delete($positionlevel)) {
            $this->Flash->success(__('The positionlevel has been deleted.'));
        } else {
            $this->Flash->error(__('The positionlevel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

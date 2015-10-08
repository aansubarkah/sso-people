<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Levels Controller
 *
 * @property \App\Model\Table\LevelsTable $Levels
 */
class LevelsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Positionlevels']
        ];
        $this->set('levels', $this->paginate($this->Levels));
        $this->set('_serialize', ['levels']);
    }

    /**
     * View method
     *
     * @param string|null $id Level id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $level = $this->Levels->get($id, [
            'contain' => ['Positionlevels', 'Users', 'Usercareerviews', 'Userlevelviews']
        ]);
        $this->set('level', $level);
        $this->set('_serialize', ['level']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $level = $this->Levels->newEntity();
        if ($this->request->is('post')) {
            $level = $this->Levels->patchEntity($level, $this->request->data);
            if ($this->Levels->save($level)) {
                $this->Flash->success(__('The level has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The level could not be saved. Please, try again.'));
            }
        }
        $positionlevels = $this->Levels->Positionlevels->find('list', ['limit' => 200]);
        $users = $this->Levels->Users->find('list', ['limit' => 200]);
        $this->set(compact('level', 'positionlevels', 'users'));
        $this->set('_serialize', ['level']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Level id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $level = $this->Levels->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $level = $this->Levels->patchEntity($level, $this->request->data);
            if ($this->Levels->save($level)) {
                $this->Flash->success(__('The level has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The level could not be saved. Please, try again.'));
            }
        }
        $positionlevels = $this->Levels->Positionlevels->find('list', ['limit' => 200]);
        $users = $this->Levels->Users->find('list', ['limit' => 200]);
        $this->set(compact('level', 'positionlevels', 'users'));
        $this->set('_serialize', ['level']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Level id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $level = $this->Levels->get($id);
        if ($this->Levels->delete($level)) {
            $this->Flash->success(__('The level has been deleted.'));
        } else {
            $this->Flash->error(__('The level could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

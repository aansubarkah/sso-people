<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Chiefs Controller
 *
 * @property \App\Model\Table\ChiefsTable $Chiefs
 */
class ChiefsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('chiefs', $this->paginate($this->Chiefs));
        $this->set('_serialize', ['chiefs']);
    }

    /**
     * View method
     *
     * @param string|null $id Chief id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chief = $this->Chiefs->get($id, [
            'contain' => ['Users', 'Departements']
        ]);
        $this->set('chief', $chief);
        $this->set('_serialize', ['chief']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chief = $this->Chiefs->newEntity();
        if ($this->request->is('post')) {
            $chief = $this->Chiefs->patchEntity($chief, $this->request->data);
            if ($this->Chiefs->save($chief)) {
                $this->Flash->success(__('The chief has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chief could not be saved. Please, try again.'));
            }
        }
        $users = $this->Chiefs->Users->find('list', ['limit' => 200]);
        $departements = $this->Chiefs->Departements->find('list', ['limit' => 200]);
        $this->set(compact('chief', 'users', 'departements'));
        $this->set('_serialize', ['chief']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chief id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chief = $this->Chiefs->get($id, [
            'contain' => ['Departements']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chief = $this->Chiefs->patchEntity($chief, $this->request->data);
            if ($this->Chiefs->save($chief)) {
                $this->Flash->success(__('The chief has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chief could not be saved. Please, try again.'));
            }
        }
        $users = $this->Chiefs->Users->find('list', ['limit' => 200]);
        $departements = $this->Chiefs->Departements->find('list', ['limit' => 200]);
        $this->set(compact('chief', 'users', 'departements'));
        $this->set('_serialize', ['chief']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chief id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chief = $this->Chiefs->get($id);
        if ($this->Chiefs->delete($chief)) {
            $this->Flash->success(__('The chief has been deleted.'));
        } else {
            $this->Flash->error(__('The chief could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

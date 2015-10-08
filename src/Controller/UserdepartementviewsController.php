<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userdepartementviews Controller
 *
 * @property \App\Model\Table\UserdepartementviewsTable $Userdepartementviews
 */
class UserdepartementviewsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departements', 'Users']
        ];
        $this->set('userdepartementviews', $this->paginate($this->Userdepartementviews));
        $this->set('_serialize', ['userdepartementviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Userdepartementview id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userdepartementview = $this->Userdepartementviews->get($id, [
            'contain' => ['Departements', 'Users']
        ]);
        $this->set('userdepartementview', $userdepartementview);
        $this->set('_serialize', ['userdepartementview']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userdepartementview = $this->Userdepartementviews->newEntity();
        if ($this->request->is('post')) {
            $userdepartementview = $this->Userdepartementviews->patchEntity($userdepartementview, $this->request->data);
            if ($this->Userdepartementviews->save($userdepartementview)) {
                $this->Flash->success(__('The userdepartementview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userdepartementview could not be saved. Please, try again.'));
            }
        }
        $departements = $this->Userdepartementviews->Departements->find('list', ['limit' => 200]);
        $users = $this->Userdepartementviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('userdepartementview', 'departements', 'users'));
        $this->set('_serialize', ['userdepartementview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userdepartementview id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userdepartementview = $this->Userdepartementviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userdepartementview = $this->Userdepartementviews->patchEntity($userdepartementview, $this->request->data);
            if ($this->Userdepartementviews->save($userdepartementview)) {
                $this->Flash->success(__('The userdepartementview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userdepartementview could not be saved. Please, try again.'));
            }
        }
        $departements = $this->Userdepartementviews->Departements->find('list', ['limit' => 200]);
        $users = $this->Userdepartementviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('userdepartementview', 'departements', 'users'));
        $this->set('_serialize', ['userdepartementview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userdepartementview id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userdepartementview = $this->Userdepartementviews->get($id);
        if ($this->Userdepartementviews->delete($userdepartementview)) {
            $this->Flash->success(__('The userdepartementview has been deleted.'));
        } else {
            $this->Flash->error(__('The userdepartementview could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

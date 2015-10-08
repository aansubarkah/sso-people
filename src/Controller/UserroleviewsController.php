<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userroleviews Controller
 *
 * @property \App\Model\Table\UserroleviewsTable $Userroleviews
 */
class UserroleviewsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Users']
        ];
        $this->set('userroleviews', $this->paginate($this->Userroleviews));
        $this->set('_serialize', ['userroleviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Userroleview id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userroleview = $this->Userroleviews->get($id, [
            'contain' => ['Roles', 'Users']
        ]);
        $this->set('userroleview', $userroleview);
        $this->set('_serialize', ['userroleview']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userroleview = $this->Userroleviews->newEntity();
        if ($this->request->is('post')) {
            $userroleview = $this->Userroleviews->patchEntity($userroleview, $this->request->data);
            if ($this->Userroleviews->save($userroleview)) {
                $this->Flash->success(__('The userroleview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userroleview could not be saved. Please, try again.'));
            }
        }
        $roles = $this->Userroleviews->Roles->find('list', ['limit' => 200]);
        $users = $this->Userroleviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('userroleview', 'roles', 'users'));
        $this->set('_serialize', ['userroleview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userroleview id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userroleview = $this->Userroleviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userroleview = $this->Userroleviews->patchEntity($userroleview, $this->request->data);
            if ($this->Userroleviews->save($userroleview)) {
                $this->Flash->success(__('The userroleview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userroleview could not be saved. Please, try again.'));
            }
        }
        $roles = $this->Userroleviews->Roles->find('list', ['limit' => 200]);
        $users = $this->Userroleviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('userroleview', 'roles', 'users'));
        $this->set('_serialize', ['userroleview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userroleview id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userroleview = $this->Userroleviews->get($id);
        if ($this->Userroleviews->delete($userroleview)) {
            $this->Flash->success(__('The userroleview has been deleted.'));
        } else {
            $this->Flash->error(__('The userroleview could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

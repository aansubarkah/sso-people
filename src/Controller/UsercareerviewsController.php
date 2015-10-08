<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usercareerviews Controller
 *
 * @property \App\Model\Table\UsercareerviewsTable $Usercareerviews
 */
class UsercareerviewsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Levels', 'Roles', 'Departements']
        ];
        $this->set('usercareerviews', $this->paginate($this->Usercareerviews));
        $this->set('_serialize', ['usercareerviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Usercareerview id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usercareerview = $this->Usercareerviews->get($id, [
            'contain' => ['Users', 'Levels', 'Roles', 'Departements']
        ]);
        $this->set('usercareerview', $usercareerview);
        $this->set('_serialize', ['usercareerview']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usercareerview = $this->Usercareerviews->newEntity();
        if ($this->request->is('post')) {
            $usercareerview = $this->Usercareerviews->patchEntity($usercareerview, $this->request->data);
            if ($this->Usercareerviews->save($usercareerview)) {
                $this->Flash->success(__('The usercareerview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usercareerview could not be saved. Please, try again.'));
            }
        }
        $users = $this->Usercareerviews->Users->find('list', ['limit' => 200]);
        $levels = $this->Usercareerviews->Levels->find('list', ['limit' => 200]);
        $roles = $this->Usercareerviews->Roles->find('list', ['limit' => 200]);
        $departements = $this->Usercareerviews->Departements->find('list', ['limit' => 200]);
        $this->set(compact('usercareerview', 'users', 'levels', 'roles', 'departements'));
        $this->set('_serialize', ['usercareerview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usercareerview id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usercareerview = $this->Usercareerviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usercareerview = $this->Usercareerviews->patchEntity($usercareerview, $this->request->data);
            if ($this->Usercareerviews->save($usercareerview)) {
                $this->Flash->success(__('The usercareerview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usercareerview could not be saved. Please, try again.'));
            }
        }
        $users = $this->Usercareerviews->Users->find('list', ['limit' => 200]);
        $levels = $this->Usercareerviews->Levels->find('list', ['limit' => 200]);
        $roles = $this->Usercareerviews->Roles->find('list', ['limit' => 200]);
        $departements = $this->Usercareerviews->Departements->find('list', ['limit' => 200]);
        $this->set(compact('usercareerview', 'users', 'levels', 'roles', 'departements'));
        $this->set('_serialize', ['usercareerview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usercareerview id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usercareerview = $this->Usercareerviews->get($id);
        if ($this->Usercareerviews->delete($usercareerview)) {
            $this->Flash->success(__('The usercareerview has been deleted.'));
        } else {
            $this->Flash->error(__('The usercareerview could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

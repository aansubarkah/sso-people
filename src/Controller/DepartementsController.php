<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Departements Controller
 *
 * @property \App\Model\Table\DepartementsTable $Departements
 */
class DepartementsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentDepartements']
        ];
        $this->set('departements', $this->paginate($this->Departements));
        $this->set('_serialize', ['departements']);
    }

    /**
     * View method
     *
     * @param string|null $id Departement id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departement = $this->Departements->get($id, [
            'contain' => ['ParentDepartements', 'Chiefs', 'Users', 'ChildDepartements', 'Usercareerviews', 'Userdepartementviews']
        ]);
        $this->set('departement', $departement);
        $this->set('_serialize', ['departement']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departement = $this->Departements->newEntity();
        if ($this->request->is('post')) {
            $departement = $this->Departements->patchEntity($departement, $this->request->data);
            if ($this->Departements->save($departement)) {
                $this->Flash->success(__('The departement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departement could not be saved. Please, try again.'));
            }
        }
        $parentDepartements = $this->Departements->ParentDepartements->find('list', ['limit' => 200]);
        $chiefs = $this->Departements->Chiefs->find('list', ['limit' => 200]);
        $users = $this->Departements->Users->find('list', ['limit' => 200]);
        $this->set(compact('departement', 'parentDepartements', 'chiefs', 'users'));
        $this->set('_serialize', ['departement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Departement id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departement = $this->Departements->get($id, [
            'contain' => ['Chiefs', 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departement = $this->Departements->patchEntity($departement, $this->request->data);
            if ($this->Departements->save($departement)) {
                $this->Flash->success(__('The departement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departement could not be saved. Please, try again.'));
            }
        }
        $parentDepartements = $this->Departements->ParentDepartements->find('list', ['limit' => 200]);
        $chiefs = $this->Departements->Chiefs->find('list', ['limit' => 200]);
        $users = $this->Departements->Users->find('list', ['limit' => 200]);
        $this->set(compact('departement', 'parentDepartements', 'chiefs', 'users'));
        $this->set('_serialize', ['departement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Departement id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departement = $this->Departements->get($id);
        if ($this->Departements->delete($departement)) {
            $this->Flash->success(__('The departement has been deleted.'));
        } else {
            $this->Flash->error(__('The departement could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

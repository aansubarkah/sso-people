<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EducationsUsers Controller
 *
 * @property \App\Model\Table\EducationsUsersTable $EducationsUsers
 */
class EducationsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Educations', 'Users']
        ];
        $this->set('educationsUsers', $this->paginate($this->EducationsUsers));
        $this->set('_serialize', ['educationsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Educations User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $educationsUser = $this->EducationsUsers->get($id, [
            'contain' => ['Educations', 'Users']
        ]);
        $this->set('educationsUser', $educationsUser);
        $this->set('_serialize', ['educationsUser']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $educationsUser = $this->EducationsUsers->newEntity();
        if ($this->request->is('post')) {
            $educationsUser = $this->EducationsUsers->patchEntity($educationsUser, $this->request->data);
            if ($this->EducationsUsers->save($educationsUser)) {
                $this->Flash->success(__('The educations user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The educations user could not be saved. Please, try again.'));
            }
        }
        $educations = $this->EducationsUsers->Educations->find('list', ['limit' => 200]);
        $users = $this->EducationsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('educationsUser', 'educations', 'users'));
        $this->set('_serialize', ['educationsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Educations User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $educationsUser = $this->EducationsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $educationsUser = $this->EducationsUsers->patchEntity($educationsUser, $this->request->data);
            if ($this->EducationsUsers->save($educationsUser)) {
                $this->Flash->success(__('The educations user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The educations user could not be saved. Please, try again.'));
            }
        }
        $educations = $this->EducationsUsers->Educations->find('list', ['limit' => 200]);
        $users = $this->EducationsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('educationsUser', 'educations', 'users'));
        $this->set('_serialize', ['educationsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Educations User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $educationsUser = $this->EducationsUsers->get($id);
        if ($this->EducationsUsers->delete($educationsUser)) {
            $this->Flash->success(__('The educations user has been deleted.'));
        } else {
            $this->Flash->error(__('The educations user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

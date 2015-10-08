<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usereducationviews Controller
 *
 * @property \App\Model\Table\UsereducationviewsTable $Usereducationviews
 */
class UsereducationviewsController extends AppController
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
        $this->set('usereducationviews', $this->paginate($this->Usereducationviews));
        $this->set('_serialize', ['usereducationviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Usereducationview id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usereducationview = $this->Usereducationviews->get($id, [
            'contain' => ['Educations', 'Users']
        ]);
        $this->set('usereducationview', $usereducationview);
        $this->set('_serialize', ['usereducationview']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usereducationview = $this->Usereducationviews->newEntity();
        if ($this->request->is('post')) {
            $usereducationview = $this->Usereducationviews->patchEntity($usereducationview, $this->request->data);
            if ($this->Usereducationviews->save($usereducationview)) {
                $this->Flash->success(__('The usereducationview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usereducationview could not be saved. Please, try again.'));
            }
        }
        $educations = $this->Usereducationviews->Educations->find('list', ['limit' => 200]);
        $users = $this->Usereducationviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('usereducationview', 'educations', 'users'));
        $this->set('_serialize', ['usereducationview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usereducationview id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usereducationview = $this->Usereducationviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usereducationview = $this->Usereducationviews->patchEntity($usereducationview, $this->request->data);
            if ($this->Usereducationviews->save($usereducationview)) {
                $this->Flash->success(__('The usereducationview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usereducationview could not be saved. Please, try again.'));
            }
        }
        $educations = $this->Usereducationviews->Educations->find('list', ['limit' => 200]);
        $users = $this->Usereducationviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('usereducationview', 'educations', 'users'));
        $this->set('_serialize', ['usereducationview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usereducationview id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usereducationview = $this->Usereducationviews->get($id);
        if ($this->Usereducationviews->delete($usereducationview)) {
            $this->Flash->success(__('The usereducationview has been deleted.'));
        } else {
            $this->Flash->error(__('The usereducationview could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

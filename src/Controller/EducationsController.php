<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Educations Controller
 *
 * @property \App\Model\Table\EducationsTable $Educations
 */
class EducationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('educations', $this->paginate($this->Educations));
        $this->set('_serialize', ['educations']);
    }

    /**
     * View method
     *
     * @param string|null $id Education id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $education = $this->Educations->get($id, [
            'contain' => ['Users', 'Usereducationviews']
        ]);
        $this->set('education', $education);
        $this->set('_serialize', ['education']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $education = $this->Educations->newEntity();
        if ($this->request->is('post')) {
            $education = $this->Educations->patchEntity($education, $this->request->data);
            if ($this->Educations->save($education)) {
                $this->Flash->success(__('The education has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The education could not be saved. Please, try again.'));
            }
        }
        $users = $this->Educations->Users->find('list', ['limit' => 200]);
        $this->set(compact('education', 'users'));
        $this->set('_serialize', ['education']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Education id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $education = $this->Educations->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $education = $this->Educations->patchEntity($education, $this->request->data);
            if ($this->Educations->save($education)) {
                $this->Flash->success(__('The education has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The education could not be saved. Please, try again.'));
            }
        }
        $users = $this->Educations->Users->find('list', ['limit' => 200]);
        $this->set(compact('education', 'users'));
        $this->set('_serialize', ['education']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Education id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $education = $this->Educations->get($id);
        if ($this->Educations->delete($education)) {
            $this->Flash->success(__('The education has been deleted.'));
        } else {
            $this->Flash->error(__('The education could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Uploaders Controller
 *
 * @property \App\Model\Table\UploadersTable $Uploaders
 */
class UploadersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('uploaders', $this->paginate($this->Uploaders));
        $this->set('_serialize', ['uploaders']);
    }

    /**
     * View method
     *
     * @param string|null $id Uploader id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $uploader = $this->Uploaders->get($id, [
            'contain' => []
        ]);
        $this->set('uploader', $uploader);
        $this->set('_serialize', ['uploader']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uploader = $this->Uploaders->newEntity();
        if ($this->request->is('post')) {
            $uploader = $this->Uploaders->patchEntity($uploader, $this->request->data);
            if ($this->Uploaders->save($uploader)) {
                $this->Flash->success(__('The uploader has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The uploader could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('uploader'));
        $this->set('_serialize', ['uploader']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Uploader id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uploader = $this->Uploaders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uploader = $this->Uploaders->patchEntity($uploader, $this->request->data);
            if ($this->Uploaders->save($uploader)) {
                $this->Flash->success(__('The uploader has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The uploader could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('uploader'));
        $this->set('_serialize', ['uploader']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Uploader id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $uploader = $this->Uploaders->get($id);
        if ($this->Uploaders->delete($uploader)) {
            $this->Flash->success(__('The uploader has been deleted.'));
        } else {
            $this->Flash->error(__('The uploader could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

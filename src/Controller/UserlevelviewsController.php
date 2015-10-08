<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userlevelviews Controller
 *
 * @property \App\Model\Table\UserlevelviewsTable $Userlevelviews
 */
class UserlevelviewsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Levels', 'Users']
        ];
        $this->set('userlevelviews', $this->paginate($this->Userlevelviews));
        $this->set('_serialize', ['userlevelviews']);
    }

    /**
     * View method
     *
     * @param string|null $id Userlevelview id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userlevelview = $this->Userlevelviews->get($id, [
            'contain' => ['Levels', 'Users']
        ]);
        $this->set('userlevelview', $userlevelview);
        $this->set('_serialize', ['userlevelview']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userlevelview = $this->Userlevelviews->newEntity();
        if ($this->request->is('post')) {
            $userlevelview = $this->Userlevelviews->patchEntity($userlevelview, $this->request->data);
            if ($this->Userlevelviews->save($userlevelview)) {
                $this->Flash->success(__('The userlevelview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userlevelview could not be saved. Please, try again.'));
            }
        }
        $levels = $this->Userlevelviews->Levels->find('list', ['limit' => 200]);
        $users = $this->Userlevelviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('userlevelview', 'levels', 'users'));
        $this->set('_serialize', ['userlevelview']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userlevelview id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userlevelview = $this->Userlevelviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userlevelview = $this->Userlevelviews->patchEntity($userlevelview, $this->request->data);
            if ($this->Userlevelviews->save($userlevelview)) {
                $this->Flash->success(__('The userlevelview has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userlevelview could not be saved. Please, try again.'));
            }
        }
        $levels = $this->Userlevelviews->Levels->find('list', ['limit' => 200]);
        $users = $this->Userlevelviews->Users->find('list', ['limit' => 200]);
        $this->set(compact('userlevelview', 'levels', 'users'));
        $this->set('_serialize', ['userlevelview']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userlevelview id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userlevelview = $this->Userlevelviews->get($id);
        if ($this->Userlevelviews->delete($userlevelview)) {
            $this->Flash->success(__('The userlevelview has been deleted.'));
        } else {
            $this->Flash->error(__('The userlevelview could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

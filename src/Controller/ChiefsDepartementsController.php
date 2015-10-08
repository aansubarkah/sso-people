<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChiefsDepartements Controller
 *
 * @property \App\Model\Table\ChiefsDepartementsTable $ChiefsDepartements
 */
class ChiefsDepartementsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Chieves', 'Departements']
        ];
        $this->set('chiefsDepartements', $this->paginate($this->ChiefsDepartements));
        $this->set('_serialize', ['chiefsDepartements']);
    }

    /**
     * View method
     *
     * @param string|null $id Chiefs Departement id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chiefsDepartement = $this->ChiefsDepartements->get($id, [
            'contain' => ['Chieves', 'Departements']
        ]);
        $this->set('chiefsDepartement', $chiefsDepartement);
        $this->set('_serialize', ['chiefsDepartement']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chiefsDepartement = $this->ChiefsDepartements->newEntity();
        if ($this->request->is('post')) {
            $chiefsDepartement = $this->ChiefsDepartements->patchEntity($chiefsDepartement, $this->request->data);
            if ($this->ChiefsDepartements->save($chiefsDepartement)) {
                $this->Flash->success(__('The chiefs departement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chiefs departement could not be saved. Please, try again.'));
            }
        }
        $chieves = $this->ChiefsDepartements->Chieves->find('list', ['limit' => 200]);
        $departements = $this->ChiefsDepartements->Departements->find('list', ['limit' => 200]);
        $this->set(compact('chiefsDepartement', 'chieves', 'departements'));
        $this->set('_serialize', ['chiefsDepartement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chiefs Departement id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chiefsDepartement = $this->ChiefsDepartements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chiefsDepartement = $this->ChiefsDepartements->patchEntity($chiefsDepartement, $this->request->data);
            if ($this->ChiefsDepartements->save($chiefsDepartement)) {
                $this->Flash->success(__('The chiefs departement has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chiefs departement could not be saved. Please, try again.'));
            }
        }
        $chieves = $this->ChiefsDepartements->Chieves->find('list', ['limit' => 200]);
        $departements = $this->ChiefsDepartements->Departements->find('list', ['limit' => 200]);
        $this->set(compact('chiefsDepartement', 'chieves', 'departements'));
        $this->set('_serialize', ['chiefsDepartement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chiefs Departement id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chiefsDepartement = $this->ChiefsDepartements->get($id);
        if ($this->ChiefsDepartements->delete($chiefsDepartement)) {
            $this->Flash->success(__('The chiefs departement has been deleted.'));
        } else {
            $this->Flash->error(__('The chiefs departement could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

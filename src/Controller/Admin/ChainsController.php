<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Chains Controller
 *
 * @property \App\Model\Table\ChainsTable $Chains
 */
class ChainsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('chains', $this->paginate($this->Chains));
        $this->set('_serialize', ['chains']);
    }

    /**
     * View method
     *
     * @param string|null $id Chain id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chain = $this->Chains->get($id, [
            'contain' => ['Schools']
        ]);
        $this->set('chain', $chain);
        $this->set('_serialize', ['chain']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chain = $this->Chains->newEntity();
        if ($this->request->is('post')) {
            $chain = $this->Chains->patchEntity($chain, $this->request->data);
            if ($this->Chains->save($chain)) {
                $this->Flash->success('The chain has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The chain could not be saved. Please, try again.');
            }
        }
        $this->set(compact('chain'));
        $this->set('_serialize', ['chain']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chain id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chain = $this->Chains->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chain = $this->Chains->patchEntity($chain, $this->request->data);
            if ($this->Chains->save($chain)) {
                $this->Flash->success('The chain has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The chain could not be saved. Please, try again.');
            }
        }
        $this->set(compact('chain'));
        $this->set('_serialize', ['chain']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chain id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chain = $this->Chains->get($id);
        if ($this->Chains->delete($chain)) {
            $this->Flash->success('The chain has been deleted.');
        } else {
            $this->Flash->error('The chain could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

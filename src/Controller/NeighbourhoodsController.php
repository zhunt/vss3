<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Neighbourhoods Controller
 *
 * @property \App\Model\Table\NeighbourhoodsTable $Neighbourhoods
 */
class NeighbourhoodsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cities']
        ];
        $neighbourhoods = $this->paginate($this->Neighbourhoods);

        $this->set(compact('neighbourhoods'));
        $this->set('_serialize', ['neighbourhoods']);
    }

    /**
     * View method
     *
     * @param string|null $id Neighbourhood id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $neighbourhood = $this->Neighbourhoods->get($id, [
            'contain' => ['Cities', 'Venues']
        ]);

        $this->set('neighbourhood', $neighbourhood);
        $this->set('_serialize', ['neighbourhood']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $neighbourhood = $this->Neighbourhoods->newEntity();
        if ($this->request->is('post')) {
            $neighbourhood = $this->Neighbourhoods->patchEntity($neighbourhood, $this->request->data);
            if ($this->Neighbourhoods->save($neighbourhood)) {
                $this->Flash->success(__('The neighbourhood has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The neighbourhood could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Neighbourhoods->Cities->find('list', ['limit' => 200]);
        $this->set(compact('neighbourhood', 'cities'));
        $this->set('_serialize', ['neighbourhood']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Neighbourhood id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $neighbourhood = $this->Neighbourhoods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $neighbourhood = $this->Neighbourhoods->patchEntity($neighbourhood, $this->request->data);
            if ($this->Neighbourhoods->save($neighbourhood)) {
                $this->Flash->success(__('The neighbourhood has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The neighbourhood could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Neighbourhoods->Cities->find('list', ['limit' => 200]);
        $this->set(compact('neighbourhood', 'cities'));
        $this->set('_serialize', ['neighbourhood']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Neighbourhood id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $neighbourhood = $this->Neighbourhoods->get($id);
        if ($this->Neighbourhoods->delete($neighbourhood)) {
            $this->Flash->success(__('The neighbourhood has been deleted.'));
        } else {
            $this->Flash->error(__('The neighbourhood could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

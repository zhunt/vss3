<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstablishmentTypes Controller
 *
 * @property \App\Model\Table\EstablishmentTypesTable $EstablishmentTypes
 */
class EstablishmentTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $establishmentTypes = $this->paginate($this->EstablishmentTypes);

        $this->set(compact('establishmentTypes'));
        $this->set('_serialize', ['establishmentTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Establishment Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establishmentType = $this->EstablishmentTypes->get($id, [
            'contain' => ['Venues']
        ]);

        $this->set('establishmentType', $establishmentType);
        $this->set('_serialize', ['establishmentType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establishmentType = $this->EstablishmentTypes->newEntity();
        if ($this->request->is('post')) {
            $establishmentType = $this->EstablishmentTypes->patchEntity($establishmentType, $this->request->data);
            if ($this->EstablishmentTypes->save($establishmentType)) {
                $this->Flash->success(__('The establishment type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The establishment type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('establishmentType'));
        $this->set('_serialize', ['establishmentType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Establishment Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establishmentType = $this->EstablishmentTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establishmentType = $this->EstablishmentTypes->patchEntity($establishmentType, $this->request->data);
            if ($this->EstablishmentTypes->save($establishmentType)) {
                $this->Flash->success(__('The establishment type has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The establishment type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('establishmentType'));
        $this->set('_serialize', ['establishmentType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Establishment Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establishmentType = $this->EstablishmentTypes->get($id);
        if ($this->EstablishmentTypes->delete($establishmentType)) {
            $this->Flash->success(__('The establishment type has been deleted.'));
        } else {
            $this->Flash->error(__('The establishment type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

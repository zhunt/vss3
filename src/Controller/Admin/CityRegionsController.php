<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * CityRegions Controller
 *
 * @property \App\Model\Table\CityRegionsTable $CityRegions
 */
class CityRegionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'Provinces', 'Cities']
        ];
        $cityRegions = $this->paginate($this->CityRegions);

        $this->set(compact('cityRegions'));
        $this->set('_serialize', ['cityRegions']);
    }

    /**
     * View method
     *
     * @param string|null $id City Region id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cityRegion = $this->CityRegions->get($id, [
            'contain' => ['Countries', 'Provinces', 'Cities']
        ]);

        $this->set('cityRegion', $cityRegion);
        $this->set('_serialize', ['cityRegion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cityRegion = $this->CityRegions->newEntity();
        if ($this->request->is('post')) {
            $cityRegion = $this->CityRegions->patchEntity($cityRegion, $this->request->data);
            if ($this->CityRegions->save($cityRegion)) {
                $this->Flash->success(__('The city region has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The city region could not be saved. Please, try again.'));
            }
        }
        $countries = $this->CityRegions->Countries->find('list', ['limit' => 200]);
        $provinces = $this->CityRegions->Provinces->find('list', ['limit' => 200]);
        $cities = $this->CityRegions->Cities->find('list', ['limit' => 200]);
        $this->set(compact('cityRegion', 'countries', 'provinces', 'cities'));
        $this->set('_serialize', ['cityRegion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id City Region id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cityRegion = $this->CityRegions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cityRegion = $this->CityRegions->patchEntity($cityRegion, $this->request->data);
            if ($this->CityRegions->save($cityRegion)) {
                $this->Flash->success(__('The city region has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The city region could not be saved. Please, try again.'));
            }
        }
        $countries = $this->CityRegions->Countries->find('list', ['limit' => 200]);
        $provinces = $this->CityRegions->Provinces->find('list', ['limit' => 200]);
        $cities = $this->CityRegions->Cities->find('list', ['limit' => 200]);
        $this->set(compact('cityRegion', 'countries', 'provinces', 'cities'));
        $this->set('_serialize', ['cityRegion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id City Region id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cityRegion = $this->CityRegions->get($id);
        if ($this->CityRegions->delete($cityRegion)) {
            $this->Flash->success(__('The city region has been deleted.'));
        } else {
            $this->Flash->error(__('The city region could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

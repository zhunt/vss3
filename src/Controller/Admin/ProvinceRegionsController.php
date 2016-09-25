<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ProvinceRegions Controller
 *
 * @property \App\Model\Table\ProvinceRegionsTable $ProvinceRegions
 */
class ProvinceRegionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'Provinces']
        ];
        $provinceRegions = $this->paginate($this->ProvinceRegions);

        $this->set(compact('provinceRegions'));
        $this->set('_serialize', ['provinceRegions']);
    }

    /**
     * View method
     *
     * @param string|null $id Province Region id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $provinceRegion = $this->ProvinceRegions->get($id, [
            'contain' => ['Countries', 'Provinces', 'Cities']
        ]);

        $this->set('provinceRegion', $provinceRegion);
        $this->set('_serialize', ['provinceRegion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $provinceRegion = $this->ProvinceRegions->newEntity();
        if ($this->request->is('post')) {
            $provinceRegion = $this->ProvinceRegions->patchEntity($provinceRegion, $this->request->data);
            if ($this->ProvinceRegions->save($provinceRegion)) {
                $this->Flash->success(__('The province region has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The province region could not be saved. Please, try again.'));
            }
        }
        $countries = $this->ProvinceRegions->Countries->find('list', ['limit' => 200]);
        $provinces = $this->ProvinceRegions->Provinces->find('list', ['limit' => 200]);
        $this->set(compact('provinceRegion', 'countries', 'provinces'));
        $this->set('_serialize', ['provinceRegion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Province Region id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $provinceRegion = $this->ProvinceRegions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $provinceRegion = $this->ProvinceRegions->patchEntity($provinceRegion, $this->request->data);
            if ($this->ProvinceRegions->save($provinceRegion)) {
                $this->Flash->success(__('The province region has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The province region could not be saved. Please, try again.'));
            }
        }
        $countries = $this->ProvinceRegions->Countries->find('list', ['limit' => 200]);
        $provinces = $this->ProvinceRegions->Provinces->find('list', ['limit' => 200]);
        $this->set(compact('provinceRegion', 'countries', 'provinces'));
        $this->set('_serialize', ['provinceRegion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Province Region id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $provinceRegion = $this->ProvinceRegions->get($id);
        if ($this->ProvinceRegions->delete($provinceRegion)) {
            $this->Flash->success(__('The province region has been deleted.'));
        } else {
            $this->Flash->error(__('The province region could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Cities Controller
 *
 * @property \App\Model\Table\CitiesTable $Cities
 */
class CitiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Provinces', 'Countries']
        ];
        $this->set('cities', $this->paginate($this->Cities));
        $this->set('_serialize', ['cities']);
    }

    /**
     * View method
     *
     * @param string|null $id City id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $city = $this->Cities->get($id, [
            'contain' => ['Provinces', 'Countries', 'Schools']
        ]);
        $this->set('city', $city);
        $this->set('_serialize', ['city']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $city = $this->Cities->newEntity();
        if ($this->request->is('post')) {

            if ( empty($this->request->data['geo_cords']) ) {//debug($this->request->data); 

                $this->loadComponent('Geocode');
                $geo = $this->Geocode->reEncodeCity( 
                    $this->request->data['name'], 
                    $this->Cities->Provinces->get($this->request->data['province_id'], ['fields' => ['id','name'] ] )->toArray(),
                    $this->Cities->Countries->get($this->request->data['country_id'], ['fields' => ['id','name'] ] )->toArray() 
                    );

                $this->request->data['geo_cords'] = "{$geo['geoLatt']} , {$geo['geoLong']}";
               
            }
                        
            $city = $this->Cities->patchEntity($city, $this->request->data);
            if ($this->Cities->save($city)) {
                $this->Flash->success('The city has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The city could not be saved. Please, try again.');
            }
        }
        $provinces = $this->Cities->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Cities->Countries->find('list', ['limit' => 200]);
        $this->set(compact('city', 'provinces', 'countries'));
        $this->set('_serialize', ['city']);
    }

    /**
     * Edit method
     *
     * @param string|null $id City id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $city = $this->Cities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            if ( empty($this->request->data['geo_cords']) ) {//debug($this->request->data); 

                $this->loadComponent('Geocode');
                $geo = $this->Geocode->reEncodeCity( 
                    $this->request->data['name'], 
                    $this->Cities->Provinces->get($this->request->data['province_id'], ['fields' => ['id','name'] ] )->toArray(),
                    $this->Cities->Countries->get($this->request->data['country_id'], ['fields' => ['id','name'] ] )->toArray() 
                    );

                $this->request->data['geo_cords'] = "{$geo['geoLatt']} , {$geo['geoLong']}";
               
            }
            
            
            $city = $this->Cities->patchEntity($city, $this->request->data);
            if ($this->Cities->save($city)) {
                $this->Flash->success('The city has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The city could not be saved. Please, try again.');
            }
        }
        $provinces = $this->Cities->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Cities->Countries->find('list', ['limit' => 200]);
        $this->set(compact('city', 'provinces', 'countries'));
        $this->set('_serialize', ['city']);
    }

    /**
     * Delete method
     *
     * @param string|null $id City id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $city = $this->Cities->get($id);
        if ($this->Cities->delete($city)) {
            $this->Flash->success('The city has been deleted.');
        } else {
            $this->Flash->error('The city could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

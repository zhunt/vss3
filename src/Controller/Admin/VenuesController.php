<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Venues Controller
 *
 * @property \App\Model\Table\VenuesTable $Venues
 */
class VenuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Provinces', 'Countries', 'Cities', 'Neighbourhoods', 'EstablishmentTypes', 'InsideVenues']
        ];
        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues'));
        $this->set('_serialize', ['venues']);
    }

    /**
     * View method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['Provinces', 'Countries', 'Cities', 'Neighbourhoods', 'EstablishmentTypes', 'InsideVenues', 'Amenities', 'Cuisines', 'Features', 'VenuePhotos']
        ]);

        $this->set('venue', $venue);
        $this->set('_serialize', ['venue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venue = $this->Venues->newEntity();
        if ($this->request->is('post')) {
            $venue = $this->Venues->patchEntity($venue, $this->request->data);
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }
        $provinces = $this->Venues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Venues->Countries->find('list', ['limit' => 200]);
        $cities = $this->Venues->Cities->find('list', ['limit' => 200]);
        $neighbourhoods = $this->Venues->Neighbourhoods->find('list', ['limit' => 200]);
        $establishmentTypes = $this->Venues->EstablishmentTypes->find('list', ['limit' => 200]);
        $insideVenues = $this->Venues->InsideVenues->find('list', ['limit' => 200]);
        $amenities = $this->Venues->Amenities->find('list', ['limit' => 200]);
        $cuisines = $this->Venues->Cuisines->find('list', ['limit' => 200]);
        $features = $this->Venues->Features->find('list', ['limit' => 200]);
        $venuePhotos = $this->Venues->VenuePhotos->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'provinces', 'countries', 'cities', 'neighbourhoods', 'establishmentTypes', 'insideVenues', 'amenities', 'cuisines', 'features', 'venuePhotos'));
        $this->set('_serialize', ['venue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['Amenities', 'Cuisines', 'Features', 'VenuePhotos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venue = $this->Venues->patchEntity($venue, $this->request->data);
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue could not be saved. Please, try again.'));
            }
        }
        $provinces = $this->Venues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->Venues->Countries->find('list', ['limit' => 200]);
        $cities = $this->Venues->Cities->find('list', ['limit' => 200]);
        $neighbourhoods = $this->Venues->Neighbourhoods->find('list', ['limit' => 200]);
        $establishmentTypes = $this->Venues->EstablishmentTypes->find('list', ['limit' => 200]);
        $insideVenues = $this->Venues->InsideVenues->find('list', ['limit' => 200]);
        $amenities = $this->Venues->Amenities->find('list', ['limit' => 200]);
        $cuisines = $this->Venues->Cuisines->find('list', ['limit' => 200]);
        $features = $this->Venues->Features->find('list', ['limit' => 200]);
        $venuePhotos = $this->Venues->VenuePhotos->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'provinces', 'countries', 'cities', 'neighbourhoods', 'establishmentTypes', 'insideVenues', 'amenities', 'cuisines', 'features', 'venuePhotos'));
        $this->set('_serialize', ['venue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venue = $this->Venues->get($id);
        if ($this->Venues->delete($venue)) {
            $this->Flash->success(__('The venue has been deleted.'));
        } else {
            $this->Flash->error(__('The venue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

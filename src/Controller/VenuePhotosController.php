<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VenuePhotos Controller
 *
 * @property \App\Model\Table\VenuePhotosTable $VenuePhotos
 */
class VenuePhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $venuePhotos = $this->paginate($this->VenuePhotos);

        $this->set(compact('venuePhotos'));
        $this->set('_serialize', ['venuePhotos']);
    }

    /**
     * View method
     *
     * @param string|null $id Venue Photo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venuePhoto = $this->VenuePhotos->get($id, [
            'contain' => ['Venues']
        ]);

        $this->set('venuePhoto', $venuePhoto);
        $this->set('_serialize', ['venuePhoto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venuePhoto = $this->VenuePhotos->newEntity();
        if ($this->request->is('post')) {
            $venuePhoto = $this->VenuePhotos->patchEntity($venuePhoto, $this->request->data);
            if ($this->VenuePhotos->save($venuePhoto)) {
                $this->Flash->success(__('The venue photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue photo could not be saved. Please, try again.'));
            }
        }
        $venues = $this->VenuePhotos->Venues->find('list', ['limit' => 200]);
        $this->set(compact('venuePhoto', 'venues'));
        $this->set('_serialize', ['venuePhoto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Venue Photo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venuePhoto = $this->VenuePhotos->get($id, [
            'contain' => ['Venues']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venuePhoto = $this->VenuePhotos->patchEntity($venuePhoto, $this->request->data);
            if ($this->VenuePhotos->save($venuePhoto)) {
                $this->Flash->success(__('The venue photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The venue photo could not be saved. Please, try again.'));
            }
        }
        $venues = $this->VenuePhotos->Venues->find('list', ['limit' => 200]);
        $this->set(compact('venuePhoto', 'venues'));
        $this->set('_serialize', ['venuePhoto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Venue Photo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venuePhoto = $this->VenuePhotos->get($id);
        if ($this->VenuePhotos->delete($venuePhoto)) {
            $this->Flash->success(__('The venue photo has been deleted.'));
        } else {
            $this->Flash->error(__('The venue photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

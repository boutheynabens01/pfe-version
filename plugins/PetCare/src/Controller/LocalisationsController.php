<?php
declare(strict_types=1);

namespace PetCare\Controller;

use App\Controller\AppController;

/**
 * Localisations Controller
 *
 * @property \PetCare\Model\Table\LocalisationsTable $Localisations
 */
class LocalisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Localisations->find();
        $localisations = $this->paginate($query);

        $this->set(compact('localisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Localisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $localisation = $this->Localisations->get($id, contain: []);
        $this->set(compact('localisation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $localisation = $this->Localisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $localisation = $this->Localisations->patchEntity($localisation, $this->request->getData());
            if ($this->Localisations->save($localisation)) {
                $this->Flash->success(__('The localisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localisation could not be saved. Please, try again.'));
        }
        $this->set(compact('localisation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Localisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $localisation = $this->Localisations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $localisation = $this->Localisations->patchEntity($localisation, $this->request->getData());
            if ($this->Localisations->save($localisation)) {
                $this->Flash->success(__('The localisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localisation could not be saved. Please, try again.'));
        }
        $this->set(compact('localisation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Localisation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $localisation = $this->Localisations->get($id);
        if ($this->Localisations->delete($localisation)) {
            $this->Flash->success(__('The localisation has been deleted.'));
        } else {
            $this->Flash->error(__('The localisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

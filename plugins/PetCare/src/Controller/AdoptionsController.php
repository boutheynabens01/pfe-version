<?php
declare(strict_types=1);

namespace PetCare\Controller;

use App\Controller\AppController;

/**
 * Adoptions Controller
 *
 * @property \PetCare\Model\Table\AdoptionsTable $Adoptions
 */
class AdoptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Adoptions->find();
        $adoptions = $this->paginate($query);

        $this->set(compact('adoptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Adoption id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adoption = $this->Adoptions->get($id, contain: []);
        $this->set(compact('adoption'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adoption = $this->Adoptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $adoption = $this->Adoptions->patchEntity($adoption, $this->request->getData());
            if ($this->Adoptions->save($adoption)) {
                $this->Flash->success(__('The adoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adoption could not be saved. Please, try again.'));
        }
        $this->set(compact('adoption'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Adoption id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adoption = $this->Adoptions->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adoption = $this->Adoptions->patchEntity($adoption, $this->request->getData());
            if ($this->Adoptions->save($adoption)) {
                $this->Flash->success(__('The adoption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adoption could not be saved. Please, try again.'));
        }
        $this->set(compact('adoption'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Adoption id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adoption = $this->Adoptions->get($id);
        if ($this->Adoptions->delete($adoption)) {
            $this->Flash->success(__('The adoption has been deleted.'));
        } else {
            $this->Flash->error(__('The adoption could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

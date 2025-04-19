<?php
declare(strict_types=1);

namespace Hr\Controller;

use Hr\Controller\AppController;

/**
 * JobOffers Controller
 *
 * @property \Hr\Model\Table\JobOffersTable $JobOffers
 */
class JobOffersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->JobOffers->find()
            ->contain(['Hrs']);
        $jobOffers = $this->paginate($query);

        $this->set(compact('jobOffers'));
    }

    /**
     * View method
     *
     * @param string|null $id Job Offer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobOffer = $this->JobOffers->get($id, contain: ['Hrs', 'Applications']);
        $this->set(compact('jobOffer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobOffer = $this->JobOffers->newEmptyEntity();
        if ($this->request->is('post')) {
            $jobOffer = $this->JobOffers->patchEntity($jobOffer, $this->request->getData());
            if ($this->JobOffers->save($jobOffer)) {
                $this->Flash->success(__('The job offer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job offer could not be saved. Please, try again.'));
        }
        $hrs = $this->JobOffers->Hrs->find('list', limit: 200)->all();
        $this->set(compact('jobOffer', 'hrs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Job Offer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobOffer = $this->JobOffers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobOffer = $this->JobOffers->patchEntity($jobOffer, $this->request->getData());
            if ($this->JobOffers->save($jobOffer)) {
                $this->Flash->success(__('The job offer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job offer could not be saved. Please, try again.'));
        }
        $hrs = $this->JobOffers->Hrs->find('list', limit: 200)->all();
        $this->set(compact('jobOffer', 'hrs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Job Offer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobOffer = $this->JobOffers->get($id);
        if ($this->JobOffers->delete($jobOffer)) {
            $this->Flash->success(__('The job offer has been deleted.'));
        } else {
            $this->Flash->error(__('The job offer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

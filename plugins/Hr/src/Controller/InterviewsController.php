<?php
declare(strict_types=1);

namespace Hr\Controller;

use Hr\Controller\AppController;

/**
 * Interviews Controller
 *
 * @property \Hr\Model\Table\InterviewsTable $Interviews
 */
class InterviewsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Interviews->find()
            ->contain(['Applications']);
        $interviews = $this->paginate($query);

        $this->set(compact('interviews'));
    }

    /**
     * View method
     *
     * @param string|null $id Interview id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interview = $this->Interviews->get($id, contain: ['Applications']);
        $this->set(compact('interview'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interview = $this->Interviews->newEmptyEntity();
        if ($this->request->is('post')) {
            $interview = $this->Interviews->patchEntity($interview, $this->request->getData());
            if ($this->Interviews->save($interview)) {
                $this->Flash->success(__('The interview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The interview could not be saved. Please, try again.'));
        }
        $applications = $this->Interviews->Applications->find('list', limit: 200)->all();
        $this->set(compact('interview', 'applications'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Interview id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interview = $this->Interviews->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interview = $this->Interviews->patchEntity($interview, $this->request->getData());
            if ($this->Interviews->save($interview)) {
                $this->Flash->success(__('The interview has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The interview could not be saved. Please, try again.'));
        }
        $applications = $this->Interviews->Applications->find('list', limit: 200)->all();
        $this->set(compact('interview', 'applications'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Interview id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interview = $this->Interviews->get($id);
        if ($this->Interviews->delete($interview)) {
            $this->Flash->success(__('The interview has been deleted.'));
        } else {
            $this->Flash->error(__('The interview could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

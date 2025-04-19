<?php
declare(strict_types=1);

namespace English\Controller;

use English\Controller\AppController;

/**
 * CourseCategories Controller
 *
 * @property \English\Model\Table\CourseCategoriesTable $CourseCategories
 */
class CourseCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->CourseCategories->find();
        $courseCategories = $this->paginate($query);

        $this->set(compact('courseCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Course Category id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courseCategory = $this->CourseCategories->get($id, contain: []);
        $this->set(compact('courseCategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courseCategory = $this->CourseCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $courseCategory = $this->CourseCategories->patchEntity($courseCategory, $this->request->getData());
            if ($this->CourseCategories->save($courseCategory)) {
                $this->Flash->success(__('The course category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course category could not be saved. Please, try again.'));
        }
        $this->set(compact('courseCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course Category id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courseCategory = $this->CourseCategories->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courseCategory = $this->CourseCategories->patchEntity($courseCategory, $this->request->getData());
            if ($this->CourseCategories->save($courseCategory)) {
                $this->Flash->success(__('The course category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course category could not be saved. Please, try again.'));
        }
        $this->set(compact('courseCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courseCategory = $this->CourseCategories->get($id);
        if ($this->CourseCategories->delete($courseCategory)) {
            $this->Flash->success(__('The course category has been deleted.'));
        } else {
            $this->Flash->error(__('The course category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

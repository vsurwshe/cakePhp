<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Food Controller
 *
 * @property \App\Model\Table\FoodTable $Food
 *
 * @method \App\Model\Entity\Food[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FoodController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $food = $this->paginate($this->Food);

        $this->set(compact('food'));
    }

    /**
     * View method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $food = $this->Food->get($id, [
            'contain' => ['Custtable']
        ]);

        $this->set('food', $food);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $food = $this->Food->newEntity();
        if ($this->request->is('post')) {
            $food = $this->Food->patchEntity($food, $this->request->getData());
            if ($this->Food->save($food)) {
                $this->Flash->success(__('The food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food could not be saved. Please, try again.'));
        }
        $this->set(compact('food'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $food = $this->Food->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $food = $this->Food->patchEntity($food, $this->request->getData());
            if ($this->Food->save($food)) {
                $this->Flash->success(__('The food has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The food could not be saved. Please, try again.'));
        }
        $this->set(compact('food'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Food id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $food = $this->Food->get($id);
        if ($this->Food->delete($food)) {
            $this->Flash->success(__('The food has been deleted.'));
        } else {
            $this->Flash->error(__('The food could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

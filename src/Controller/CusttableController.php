<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Custtable Controller
 *
 * @property \App\Model\Table\CusttableTable $Custtable
 *
 * @method \App\Model\Entity\Custtable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CusttableController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Food']
        ];
        $custtable = $this->paginate($this->Custtable);

        $this->set(compact('custtable'));
    }

    /**
     * View method
     *
     * @param string|null $id Custtable id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $custtable = $this->Custtable->get($id, [
            'contain' => ['Food']
        ]);

        $this->set('custtable', $custtable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $custtable = $this->Custtable->newEntity();
        if ($this->request->is('post')) {
            $custtable = $this->Custtable->patchEntity($custtable, $this->request->getData());
            if ($this->Custtable->save($custtable)) {
                $this->Flash->success(__('The custtable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custtable could not be saved. Please, try again.'));
        }
        $food = $this->Custtable->Food->find('list', ['limit' => 200]);
        $this->set(compact('custtable', 'food'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Custtable id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $custtable = $this->Custtable->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $custtable = $this->Custtable->patchEntity($custtable, $this->request->getData());
            if ($this->Custtable->save($custtable)) {
                $this->Flash->success(__('The custtable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custtable could not be saved. Please, try again.'));
        }
        $food = $this->Custtable->Food->find('list', ['limit' => 200]);
        $this->set(compact('custtable', 'food'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Custtable id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $custtable = $this->Custtable->get($id);
        if ($this->Custtable->delete($custtable)) {
            $this->Flash->success(__('The custtable has been deleted.'));
        } else {
            $this->Flash->error(__('The custtable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

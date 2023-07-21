<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * KdOrders Controller
 *
 * @property \App\Model\Table\KdOrdersTable $KdOrders
 * @method \App\Model\Entity\KdOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KdOrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Administrators'],
        ];
        $kdOrders = $this->paginate($this->KdOrders);

        $this->set(compact('kdOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Kd Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kdOrder = $this->KdOrders->get($id, [
            'contain' => ['Administrators'],
        ]);

        $this->set(compact('kdOrder'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kdOrder = $this->KdOrders->newEmptyEntity();
        if ($this->request->is('post')) {
            $kdOrder = $this->KdOrders->patchEntity($kdOrder, $this->request->getData());
            if ($this->KdOrders->save($kdOrder)) {
                $this->Flash->success(__('The kd order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kd order could not be saved. Please, try again.'));
        }
        $administrators = $this->KdOrders->Administrators->find('list', ['limit' => 200])->all();
        $this->set(compact('kdOrder', 'administrators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kd Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kdOrder = $this->KdOrders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kdOrder = $this->KdOrders->patchEntity($kdOrder, $this->request->getData());
            if ($this->KdOrders->save($kdOrder)) {
                $this->Flash->success(__('The kd order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kd order could not be saved. Please, try again.'));
        }
        $administrators = $this->KdOrders->Administrators->find('list', ['limit' => 200])->all();
        $this->set(compact('kdOrder', 'administrators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kd Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kdOrder = $this->KdOrders->get($id);
        if ($this->KdOrders->delete($kdOrder)) {
            $this->Flash->success(__('The kd order has been deleted.'));
        } else {
            $this->Flash->error(__('The kd order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

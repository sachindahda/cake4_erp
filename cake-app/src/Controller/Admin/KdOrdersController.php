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

    public function initialize(): void
    {
        $this->viewBuilder()->setLayout('admin_dashboard');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $kdOrders = $this->paginate($this->KdOrders);
        $this->set(compact('kdOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kdOrder = $this->KdOrders->get($id, [
            'contain' => ['Users'],
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
            // pr($this->request->getData());
            $kdOrder = $this->KdOrders->patchEntity($kdOrder, $this->request->getData());
            // pr($kdOrder);
            if ($this->KdOrders->save($kdOrder)) {
                $this->Flash->success(__('The Order has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The Order could not be saved. Please, try again.'));
                // Handle validation errors
                // $validationErrors = $kdOrder->getErrors();
                // pr($validationErrors);die;
                // Now $validationErrors contains an array of all the validation errors for the entity
                // You can use it to display or handle the errors as needed
                // For example, you can pass it to the view to display the errors in the template
                // $this->set('validationErrors', $validationErrors);
            }
        }
        $users = $this->KdOrders->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('kdOrder', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
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
                $this->Flash->success(__('The Order has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Order could not be updated. Please, try again.'));
        }
        $users = $this->KdOrders->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('kdOrder', 'users'));
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kdOrder = $this->KdOrders->get($id);
        if ($this->KdOrders->delete($kdOrder)) {
            $this->Flash->success(__('The Order has been deleted.'));
        } else {
            $this->Flash->error(__('The Order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

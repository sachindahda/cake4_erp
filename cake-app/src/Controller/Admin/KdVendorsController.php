<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;


/**
 * KdVendors Controller
 *
 * @property \App\Model\Table\KdVendorsTable $KdVendors
 * @method \App\Model\Entity\KdVendor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KdVendorsController extends AppController
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
        $kdVendors = $this->paginate($this->KdVendors);

        $this->set(compact('kdVendors'));
    }

    /**
     * View method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kdVendor = $this->KdVendors->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('kdVendor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kdVendor = $this->KdVendors->newEmptyEntity();
        if ($this->request->is('post')) {
            $kdVendor = $this->KdVendors->patchEntity($kdVendor, $this->request->getData());
            if ($this->KdVendors->save($kdVendor)) {
                $this->Flash->success(__('The vendor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vendor could not be saved. Please, try again.'));
        }
        $this->set(compact('kdVendor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kdVendor = $this->KdVendors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kdVendor = $this->KdVendors->patchEntity($kdVendor, $this->request->getData());
            if ($this->KdVendors->save($kdVendor)) {
                $this->Flash->success(__('The  vendor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The  vendor could not be saved. Please, try again.'));
        }
        $this->set(compact('kdVendor'));
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kdVendor = $this->KdVendors->get($id);
        if ($this->KdVendors->delete($kdVendor)) {
            $this->Flash->success(__('The vendor has been deleted.'));
        } else {
            $this->Flash->error(__('The vendor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

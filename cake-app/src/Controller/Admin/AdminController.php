<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 */
class AdminController extends AppController
{

    public function initialize(): void
    {
        // Always enable the CSRF component.
        $this->viewBuilder()->setLayout('admin');
        // $this->loadComponent('Auth');


    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {

        parent::beforeFilter($event);
        // $this->loadComponent('Authentication.Authentication');


        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login']);
        $this->viewBuilder()->setLayout('admin_dashboard');
    }
    /**
     * Login method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function login()
    {

        $this->viewBuilder()->setLayout('admin_login');

        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // pr($result);die;
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect to /articles after login success
            return $this->redirect([
                'controller' => 'Admin',
                'action' => 'index',
                'prefix' => 'Admin'
            ]);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
        return $this->render();
    }
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect([
                'controller' => 'Admin',
                'action' => 'login',
                'prefix' => 'Admin'
            ]);
        }
    }
    public function index()
    {
        $this->render('../Orders/index');
    }
}

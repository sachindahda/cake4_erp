<?php

use Cake\Routing\Router;

$currentRoute = $this->getRequest()->getAttribute('here');
// echo $currentRoute;
// echo Router::url(['_name' => 'kd_orders']);
// echo $this->request->getParam('controller');

?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item <?= ($this->request->getParam('controller') === 'Admin') ? 'active' : '' ?>">
      <?= $this->Html->link('<i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>', [
        'controller' => 'Admin', 'action' => 'index', 'prefix' => 'Admin'
      ], ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]); ?>
    </li>

    <li class="nav-item <?= ($this->request->getParam('controller') === 'KdOrders') ? 'active' : '' ?>">
      <a class="nav-link" data-toggle="collapse" href="#tables" <?= ($this->request->getParam('controller') === 'KdOrders') ? 'aria-expanded="true"' : 'aria-expanded="false"' ?> aria-controls="tables">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title"> Orders</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?= ($this->request->getParam('controller') === 'KdOrders') ? 'show' : '' ?>" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <?= $this->Html->link(
              'Orders',
              ['_name' => 'kd_orders'],
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item <?= (in_array($this->request->getParam('controller'), ['Purchase', 'KdVendors'])) ? 'active' : '' ?>">
      <a class="nav-link" data-toggle="collapse" href="#purchase" <?= (in_array($this->request->getParam('controller'), ['Purchase', 'KdVendors'])) ? 'aria-expanded="true"' : 'aria-expanded="false"' ?> aria-controls="purchase">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Purchase</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?= (in_array($this->request->getParam('controller'), ['Purchase', 'KdVendors'])) ? 'show' : '' ?>" id="purchase">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <?= $this->Html->link(
              'Vendors',
              ['_name' => 'kd_vendors'],
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'Purchase Orders',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item <?= ($this->request->getParam('controller') === 'Manufacturing') ? 'active' : '' ?>">
      <a class="nav-link" data-toggle="collapse" href="#manufacturing" <?= ($this->request->getParam('controller') === 'Manufacturing') ? 'aria-expanded="true"' : 'aria-expanded="false"' ?> aria-controls="manufacturing">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Manufacturing</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?= ($this->request->getParam('controller') === 'Manufacturing') ? 'show' : '' ?>" id="manufacturing">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <?= $this->Html->link(
              'New Order',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'In Process',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'Ready Products',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'Ready to Publish',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'History',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item <?= ($this->request->getParam('controller') === 'Logistic') ? 'active' : '' ?>">
      <a class="nav-link" data-toggle="collapse" href="#logistic" <?= ($this->request->getParam('controller') === 'Logistic') ? 'aria-expanded="true"' : 'aria-expanded="false"' ?> aria-controls="logistic">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Logistic</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?= ($this->request->getParam('controller') === 'Logistic') ? 'show' : '' ?>" id="logistic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <?= $this->Html->link(
              'Logistic Partner',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'Ready to ship items',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'Shipped History',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
        
        </ul>
      </div>
    </li>
    <li class="nav-item <?= ($this->request->getParam('controller') === 'Finance') ? 'active' : '' ?>">
      <a class="nav-link" data-toggle="collapse" href="#finance" <?= ($this->request->getParam('controller') === 'Finance') ? 'aria-expanded="true"' : 'aria-expanded="false"' ?> aria-controls="finance">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Finance</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse <?= ($this->request->getParam('controller') === 'Finance') ? 'show' : '' ?>" id="finance">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <?= $this->Html->link(
              'Vendor Account',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'Customer Account',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link(
              'Logistic partner',
              '/recipes/view/6',
              ['escape' => false, 'class' => 'nav-link', 'url' => ['base' => false]]
            ); ?>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
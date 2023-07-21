<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <?= $this->Html->link('<i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>', [
        'controller' => 'Admin', 'action' => 'index', 'prefix' => 'Admin'
      ], ['escape' => false, 'class' => 'nav-link']); ?>
      <!-- <a class="nav-link" href="/admin">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a> -->
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Tables</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/admin/orders">Basic table</a></li>
          <?= $this->Html->link('YA',"recipes/view/6",['escape' => false]); ?>
        </ul>
      </div>
    </li>
  </ul>
</nav>
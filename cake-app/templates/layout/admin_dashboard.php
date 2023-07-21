<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <?= $this->Html->css([
    'feather/feather.css', 
    'ti-icons/css/themify-icons.css',
     'vendor.bundle.base.css', 
     'datatables.net-bs4/dataTables.bootstrap4.css',
     'ti-icons/css/themify-icons.css',
     'select.dataTables.min.css',
     'style.css'

    ]) ?>
  <link rel="shortcut icon" href="/adminimg/favicon.png" />

</head>
<?= $this->Flash->render() ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
    <?= $this->element('header');?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      <?= $this->element('sidebar');?>
      <!-- partial -->
          <?= $this->fetch('content') ?>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


    <!-- plugins:js -->
    <?= $this->Html->script([
        'vendor.bundle.base.js',
        'Chart.min.js',
        'jquery.dataTables.js',
        'dataTables.bootstrap4.js',
        'dataTables.select.min.js',
        'off-canvas.js',
        'hoverable-collapse.js',
        'template.js',
        'settings.js',
        'todolist.js',
        'dashboard.js',
        'Chart.roundedBarCharts.js'

    ]) ?>
  <!-- End custom js for this page-->
</body>

</html>


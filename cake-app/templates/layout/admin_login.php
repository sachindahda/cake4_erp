<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <?= $this->Html->css(['feather/feather.css', 'ti-icons/css/themify-icons.css', 'vendor.bundle.base.css', 'style.css']) ?>

    <link rel="shortcut icon" href="img/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <?= $this->Html->image('logo.svg', ['alt' => 'Mr Coconut']);?>

                            </div>
                            <h4>Admin Login</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <?= $this->Flash->render() ?>
                            <?= $this->Form->create([], ['class' => 'pt-3']) ?>
                            <!-- <form class="pt-3" method="post"> -->
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <!-- <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div> -->
                                <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                            </div>
                            <!-- <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="ti-facebook mr-2"></i>Connect using facebook
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                                </div> -->
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <?= $this->Html->script([
        'vendor.bundle.base.js',
        'off-canvas.js',
        'hoverable-collapse.js',
        'settings.js',
        'todolist.js',
    ]) ?>


</body>

</html>
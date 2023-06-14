<?php
$login = new LoginController();
if(isset($_POST['login'])){
    $login->login($_POST['username'], $_POST['password']);
}
?>
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
    </div>
    <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                </div>
                </div>
                <div class="card-body">
                <form name="login" action="?" role="form" class="text-start" method="POST">
                    <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="username" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                    </div>
                    <div class="text-center">
                    <input type="submit" name="login" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>


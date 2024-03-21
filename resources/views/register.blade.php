<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Azea - Laravel Admin Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template, ">

    <!-- TITLE -->
    <title> Azea - Laravel Bootstrap5 Premium Dashboard Template</title>

    <!-- FAVICON -->
    <link rel="icon" href="https://laravelui.spruko.com/azea/build/assets/images/brand/favicon.png" type="image/x-icon">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="https://laravelui.spruko.com/azea/build/assets/plugins/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- APP SCSS -->
    <link rel="preload" as="style" href="https://laravelui.spruko.com/azea/build/assets/app.57719e07.css" />
    <link rel="stylesheet" href="https://laravelui.spruko.com/azea/build/assets/app.57719e07.css" />
    <!-- ICONS CSS -->
    <link href="https://laravelui.spruko.com/azea/build/assets/iconfonts/icons.css" rel="stylesheet">

    <!-- ANIMATE CSS -->
    <link href="https://laravelui.spruko.com/azea/build/assets/iconfonts/animated.css" rel="stylesheet">

    <!-- APP CSS -->
    <link rel="preload" as="style" href="https://laravelui.spruko.com/azea/build/assets/app.f0e6a016.css" />
    <link rel="stylesheet" href="https://laravelui.spruko.com/azea/build/assets/app.f0e6a016.css" />


</head>

<body class="login-page">

    <!-- PAGE -->

    <div class="register-3">

        <div class="page">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto mt-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
                                    <div class="text-center mb-5 mt-0">
                                        <a href="https://laravelui.spruko.com/azea/index"><img
                                                src="https://laravelui.spruko.com/azea/build/assets/images/brand/logo.png"
                                                class="header-brand-img" alt="Azea logo"></a>
                                    </div>
                                    <div class="card-group mb-0">
<div class="card bg-dark text-white br-7 p-2">
                                            <div class="card-body mb-0">
                                                <div class="text-center mb-3">
                                                    <h1 class="mb-2">Register</h1>
                                                    <a href="javascript:void(0);" class="text-white">Create New
                                                        Account</a>
                                                </div>
                                                <hr class="hrregister3">
                                                <div class="text-center small mt-3">Sign up with</div>
                                                <div class="btn-list text-center mb-3 mt-2">
                                                    <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i
                                                            class="fa fa-google"></i> Google</a>
                                                    <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i
                                                            class="fa fa-twitter"></i> twitter</a>
                                                    <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i
                                                            class="fa fa-facebook"></i> facebook</a>
                                                </div>
                                                <hr class="divider my-6 text-primary">
                                                <form action="{{url('information')}}" method="POST">
                                                    @csrf
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-text">
                                                            <i class="fe fe-user"></i>
                                                        </div>
                                                        <input type="text" name="username"
                                                            class="form-control border-start-0" placeholder="Username">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-text">
                                                            <i class="fe fe-mail"></i>
                                                        </div>
                                                        <input type="text" name="email"
                                                            class="form-control border-start-0"
                                                            placeholder="Enter Email">
                                                    </div>
<div class="input-group mb-4">
                                                        <span class="input-group-text"><i class="fe fe-lock"></i></span>
                                                        <input class="form-control border-start-0" type="password"
                                                            name="password" placeholder="Password">
                                                    </div>
                                                    <div class="input-group input-text1 mb-4" id="Password-toggle">
                                                        <span class="input-group-text"><i class="fe fe-lock"></i></span>
                                                        <input class="form-control border-start-0 border-end-0"
                                                            type="password" name="verify_password"
                                                            placeholder="Confirm Password">
                                                        <a href="javascript:void(0);"
                                                            class="input-group-text border-start-0"> <i
                                                                class="fe fe-eye" aria-hidden="true"></i> </a>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit"
                                                                class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold">Create
                                                                New Account</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="text-center pt-4">
                                                    <div class="font-weight-normal fs-14 text-white-50">Already have an
                                                        account ?<a
                                                            class="btn-link font-weight-bold anchors text-white ms-2 d-inline-block"
                                                            href="https://laravelui.spruko.com/azea/login3">Login
                                                            Here</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END PAGE-->

    <!-- SCRIPTS -->
<!-- JQUERY MIN JS -->
    <script src="https://laravelui.spruko.com/azea/build/assets/plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP BUNDLE JS -->
    <script src="https://laravelui.spruko.com/azea/build/assets/plugins/bootstrap/popper.min.js"></script>
    <script src="https://laravelui.spruko.com/azea/build/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- PERFECT-SCROLLBAR JS  -->
    <script src="https://laravelui.spruko.com/azea/build/assets/plugins/p-scrollbar/p-scrollbar.js"></script>

    <!-- SHOW PASSWORD -->
    <script src="https://laravelui.spruko.com/azea/build/assets/plugins/bootstrap/bootstrap-show-password.min.js">
    </script>


    <!-- THEMECOLOR JS -->
    <link rel="modulepreload" href="https://laravelui.spruko.com/azea/build/assets/themeColors.2c059b7b.js" />
    <link rel="modulepreload" href="https://laravelui.spruko.com/azea/build/assets/index.f251b3e5.js" />
    <link rel="modulepreload" href="https://laravelui.spruko.com/azea/build/assets/apexcharts.common.4772fa83.js" />
    <script type="module" src="https://laravelui.spruko.com/azea/build/assets/themeColors.2c059b7b.js"></script>

    <!-- APP JS -->
    <link rel="modulepreload" href="https://laravelui.spruko.com/azea/build/assets/app.f4590aff.js" />
    <link rel="modulepreload" href="https://laravelui.spruko.com/azea/build/assets/index.f251b3e5.js" />
    <link rel="modulepreload" href="https://laravelui.spruko.com/azea/build/assets/apexcharts.common.4772fa83.js" />
    <script type="module" src="https://laravelui.spruko.com/azea/build/assets/app.f4590aff.js"></script>

    <!-- END SCRIPTS -->

</body>

</html>
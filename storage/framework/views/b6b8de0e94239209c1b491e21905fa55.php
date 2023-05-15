<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/swift/hospital/locked.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:25 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blood Donation | <?php echo app('translator')->get('Login'); ?></title>
    <link rel="icon" href="<?php echo e(asset('assets/front/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/plugins/bootstrap/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/back/css/main.css')); ?>" />

</head>

<body  class="theme-cyan authentication">
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="card-top"></div>
        <div class="card locked">
            <h1 class="title"> <?php echo app('translator')->get('Login'); ?>
                
            </h1>
            <div class="d-flex">
                <div class="thumb" style="margin:auto;">
                    <a href="<?php echo e(route('home')); ?>"> <img class="media-object"
                            src="<?php echo e(asset('assets/back/images/bg2.jpg')); ?>" class="rounded" alt="logo"></a>
                </div>

            </div>
            <div class="body">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <!-- Email Address -->
                    <div class="input-group icon before_span <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                        
                        <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
                        <div class="form-line">
                            <input id="email" type="email"
                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                placeholder="xyz@mail.com" value="<?php echo e(old('email')); ?>" tabindex="1" required
                                autofocus>
                            
                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Password -->
                    <div class="input-group icon before_span <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                        <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                        <div class="form-line">
                            <input type="password" required autocomplete="current-password" class="form-control"
                                name="password" placeholder="Password" required>
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <br>
                    <!-- Remember Me -->
                    <div>
                        <input class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember" id="remember_me" type="checkbox" name="terms" id="terms"
                            class="filled-in chk-col-pink">
                        <label for="remember_me"><span
                                class="ml-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
                        </label>
                    </div>

                    
                    <div class="align-center">

                        <?php if(Route::has('password.request')): ?>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot your password?')); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" style="background: #ea3d3d;"
                            class="btn btn-raised waves-effect "><?php echo app('translator')->get('Login'); ?></button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    
    <!-- Jquery Core Js -->
    <script src="<?php echo e(asset('assets/back/bundles/libscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->
    <script src="<?php echo e(asset('assets/back/bundles/vendorscripts.bundle.js')); ?>"></script> <!-- Lib Scripts Plugin Js -->

    <script src="<?php echo e(asset('assets/back/bundles/mainscripts.bundle.js')); ?>"></script><!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/swift/hospital/locked.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 08:01:25 GMT -->

</html>




<?php /**PATH E:\Laravel Projet\Blood_Donation\resources\views/auth/login.blade.php ENDPATH**/ ?>
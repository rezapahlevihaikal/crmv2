 <?php $__env->startSection('content'); ?>
<!--signup-->
<div class="login-logo m-t-30 p-b-5">
    <a href="javascript:void(0)" class="text-center db">
        <img src="/crm/storage/logos/app/logo-we.jpg" alt="Home" width="250">
    </a>
</div>

<div class="login-box m-t-20">
    <form class="form-horizontal form-material" id="loginForm">
        <div class="title">
            <h4 class="box-title m-t-10 text-center"><?php echo e(cleanLang(__('lang.sign_in_to_your_account'))); ?></h4>
            <div class="text-center  m-b-20 ">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="text" name="email" id="email" placeholder="<?php echo e(cleanLang(__('lang.email'))); ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input class="form-control" type="password" name="password" id="password" placeholder="<?php echo e(cleanLang(__('lang.password'))); ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox cursor-pointer">
                <input type="checkbox" class="custom-control-input" name="remember_me" checked="checked">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description"><?php echo e(cleanLang(__('lang.remember_me'))); ?></span>
            </label>
        </div>
        
        <div class="form-group text-center p-b-10">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block" id="loginSubmitButton"
                    data-button-loading-annimation="yes" data-button-disable-on-click="yes"
                    data-url="<?php echo e(url('login?action=initial')); ?>" data-ajax-type="POST" type="submit"><?php echo e(cleanLang(__('lang.continue'))); ?></button>
            </div>
        </div>
        
    </form>
</div>


<!--signup-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.wrapperplain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/crm/application/resources/views/pages/authentication/login.blade.php ENDPATH**/ ?>
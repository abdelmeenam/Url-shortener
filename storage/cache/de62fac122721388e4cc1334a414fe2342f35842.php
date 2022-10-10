
<?php $__env->startSection('content'); ?>

    <form action="<?php echo e(url('admin-panel/')); ?>" method="post">
        <div class="form-group has-feedback has-error">
            <input type="text" class="form-control" name="user_name" placeholder="Username">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control"  name="" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.auth.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITRAX\Revision2022\projects\shorten\views/admin/auth/login.blade.php ENDPATH**/ ?>
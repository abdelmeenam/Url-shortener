<?php echo $__env->make('admin.auth.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo e(url('/')); ?>">Shorten</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>
<!-- /.login-box -->

<?php echo $__env->make('admin.auth.layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ITRAX\Revision2022\projects\shorten\views/admin/auth/layouts/layout.blade.php ENDPATH**/ ?>
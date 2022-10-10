

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <?php $__currentLoopData = $users['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>user number : <?php echo e($user->id); ?></li>
        <li><?php echo e($user->name); ?></li>
        <li><?php echo e($user->username); ?></li>
        <li><?php echo e($user->age); ?></li>
        <li><?php echo e($user->email); ?></li>
        <li>---------------------</li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php echo e(( Links( $users['current_page']  , $users['pages']))); ?>


    <?php  ?> 
</body>
</html> <?php /**PATH C:\xampp\htdocs\ITRAX\Revision2022\projects\phplite\views/admin/dashboard.blade.php ENDPATH**/ ?>
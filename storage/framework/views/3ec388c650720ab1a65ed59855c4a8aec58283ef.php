

<?php $__env->startSection('content'); ?>

<h1>LISTADO DE MIS POST</h1>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
        <strong> <?php echo e($post['id']); ?></strong>
        <a href="<?php echo e(route('post', $post['slug'])); ?>">
        <?php echo e($post['title']); ?>

        </a>
    </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desarrollo Web\example-app\resources\views/blog.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>

<div class="box1">
    <h1 class="titulo">NUESTRO PERSONAL</h1>
       <p class="subtitulo">Nuestro equipo de trabajo</p>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="tarjeta">

        <p>
            <strong> <?php echo e($post['title']); ?></strong>
            <br>
            <img class="imagen" src="https://th.bing.com/th/id/OIP.iSJR-cIBCm7BU5O1lTaJIAAAAA?pid=ImgDet&w=350&h=350&rs=1">
            <br>
            <a href="https://github.com/">Git Hub</strong></a> 
            <div class="box2">
                <p class="info"> Más Información </p>
            </div>
    
        </p>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desarrollo Web\Laboratorio#6\resources\views/personal.blade.php ENDPATH**/ ?>
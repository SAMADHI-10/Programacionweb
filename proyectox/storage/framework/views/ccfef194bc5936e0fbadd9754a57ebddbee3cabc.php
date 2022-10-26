
<?php $__env->startSection('contenido'); ?>

<h1 class="mt-4 display-1 text-center">Recuerdos</h1>

<h2> Bienvenido a recuerdos con Blade <?php echo e($nombre); ?></h2>

<ul>
    <?php $__currentLoopData = $arraynombres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $llave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($llave); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MiDiario\resources\views/recuerdos.blade.php ENDPATH**/ ?>
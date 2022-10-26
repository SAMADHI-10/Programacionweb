

<?php $__env->startSection('contenido'); ?>

<h1 class="mt-4 display-1 text-center">Home</h1>
<?php $__env->stopSection(); ?>
<!--http://127.0.0.1:8000/home-->

<?php
/*
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mi Diario</title>
    </head>
    <h1></h1>
    <body>
    <a href="home">Home</a>
    <a href="ingresar">Ingresar recuerdo</a>
    <a href="recuerdos">Recuerdos</a>
    </body>
</html>
*/
?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MiDiario\resources\views/home.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mi Diario</title>
    </head>
    <body>
        <nav class = "navbar navbar-expand-lg navbar-dar bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href=<?php echo e(route('Nhome')); ?>>Bienvenido</a>
                <a class="navbar-brand" href=<?php echo e(route('Ningresar')); ?>>Ingresar recuerdos</a>
                <a class="navbar-brand" href=<?php echo e(route('Nrecuerdos')); ?>>Recuerdos</a>
            </div>
        </nav>    
        <!--Contenido de la pagina-->
        <?php echo $__env->yieldContent('contenido'); ?>

        <footer>ISC Milton Bautista Ortega <?php echo e(date('Y')); ?></footer>
    </body>
</html>
<?php /**PATH C:\laragon\www\MiDiario\resources\views/plantilla.blade.php ENDPATH**/ ?>
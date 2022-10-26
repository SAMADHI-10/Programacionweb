
<?php $__env->startSection('contenido'); ?>

<?php if(session()->has('confirmacion')): ?>
    <?php echo "<script>Swal.fire('Listo','Tu recuerdo llego al controlador','succes')</script>"; ?>

    <div class="alert alert-dismissible fade show text-center" role="alert">
        <strong><?php echo e(session('confirmacion')); ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" 
        aria-label="Close"></button>
    </div>
<?php endif; ?>

<h1 class="mt-4 display-1 text-center">Ingresar recuerdos</h1>
<br>
<div class="container mt-5 col-md-6">
    <div>

        <div class="text-center">
            Querido diario... <i class="bi bi-wechat"></i>
        </div>
<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Formulario incompleto</strong><?php echo e($error); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
    <div>
        <form method="post" action="guardarRecuerdos">
            <?php echo csrf_field(); ?>
            <div>
                <label class="form-label" name="labelTitulo">Titulo: </label>   
                <input type="text" class="form-control" name="txtTitulo" value="<?php echo e(old('txtTitulo')); ?>">
                <p class="fw-bold text-danger"><?php echo e($errors->first('txtTitulo')); ?></p>
            </div>

            <div>
                <label class="form-label" name="labelRecuerdo" >Recuerdo: </label> 
                <textarea class="form-control" name="txtRecuerdo" rows="3" value="<?php echo e(old('txtRecuerdo')); ?>"></textarea>
                <p class="fw-bold text-danger"><?php echo e($errors->first('txtRecuerdo')); ?></p>
            </div>
    </div>
  
    <div>
        <button type="submit" name="btnGuardar">Guardar</button>
    </div>   
        </form>

    </div>
</div>    
<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyectox\resources\views/ingresar.blade.php ENDPATH**/ ?>
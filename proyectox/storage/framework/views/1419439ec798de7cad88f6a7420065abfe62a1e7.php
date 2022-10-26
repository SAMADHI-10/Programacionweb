
<?php $__env->startSection('contenido'); ?>

<h1 class="mt-4 display-1 text-center">Ingresar recuerdos</h1>
<br>
<div>
    <div>

        <div class="text-center">
            Querido diario... <i class="bi bi-wechat"></i>
        </div>

    <div>
        <form method="post" action="guardarRecuerdos">
            <?php echo csrf_field(); ?>
            <div>
                <label class="form-label" name="labelTitulo">Titulo: </label>   
                <input type="text" class="form-control" name="txtTitulo">
            </div>

            <div>
                <label class="form-label" name="labelRecuerdo">Recuerdo: </label> 
                <textarea class="form-control" name="txtRecuerdo" rows="3"></textarea>
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

<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\MiDiario\resources\views/ingresar.blade.php ENDPATH**/ ?>
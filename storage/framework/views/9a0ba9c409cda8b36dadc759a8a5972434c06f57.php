

<?php $__env->startSection('titulo', 'Cursos'); ?>
    

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <div class="row">
            <h3>Editar</h3>
            <form class="" action="<?php echo e(route('admin.cursos.atualizar', $registro->id)); ?>" method = "post" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                
                <?php echo $__env->make('admin.cursos._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <button class="btn deep-orange">Atualizar</button>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DOCUMENTOS\TRABALHOS DE ARQUIVOS\LARAVEL\PROJETO LARAVEL\curso-laravel\cursoLaravel\resources\views/admin/cursos/editar.blade.php ENDPATH**/ ?>
<?php $__env->startSection('titulo', 'Cursos'); ?>
    

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo e(asset($curso->imagem)); ?>">
                    </div>
                    <div class="card-content">
                        <h4><?php echo e($curso->titulo); ?></h4>
                        <p><?php echo e($curso->descricao); ?></p>
                    </div>
                        <div class="card-action">
                        <a href="#">Leia Mais...</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
            <?php echo e($cursos->links()); ?>            
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DOCUMENTOS\TRABALHOS DE ARQUIVOS\LARAVEL\PROJETO LARAVEL\curso-laravel\cursoLaravel\resources\views/home.blade.php ENDPATH**/ ?>


<?php $__env->startSection('titulo', 'Cursos'); ?>
    
<div class="container">

<?php $__env->startSection('conteudo'); ?>
    <h3 class="center">Lista de Cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>imagem</th>
                    <th>Publicacão</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>$registro->id</td>
                    <td>$registro->titulo</td>
                    <td>$registro->descricao</td>
                    <td> <img src="<?php echo e(asset('$registro->imagem')); ?>" alt="<?php echo e($registro->titulo); ?>"> </td>
                    <td>$registro->publicado</td>
                    <td>
                        <a class="btn deep-orange" href="<?php echo e(route('admin.cursos.editar', $registro->id)); ?>">Editar</a>
                        <a class="btn deep-orange" href="<?php echo e(route('admin.cursos.excluir', $registro->id)); ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <a class="btn deep-orange" href="<?php echo e(route('admin.cursos.adicionar')); ?>">Adicionar</a>
    </div>

<?php $__env->stopSection(); ?>

</div>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DOCUMENTOS\TRABALHOS DE ARQUIVOS\LARAVEL\PROJETO LARAVEL\curso-laravel\cursoLaravel\resources\views/admin/curso/index.blade.php ENDPATH**/ ?>
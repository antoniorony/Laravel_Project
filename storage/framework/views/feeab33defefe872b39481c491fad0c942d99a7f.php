

<?php $__env->startSection('titulo', 'Cursos'); ?>
    

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($registro->id); ?></td>
                        <td><?php echo e($registro->titulo); ?></td>
                        <td><?php echo e($registro->descricao); ?></td>
                        <td><img src="<?php echo e(asset($registro->imagem)); ?>" alt="<?php echo e($registro->titulo); ?>" width="100"/></td>
                        <td><?php echo e($registro->publicado); ?></td>
                        <td>
                            <a class="btn deep-orange col s6" href="<?php echo e(route('admin.cursos.editar', $registro->id)); ?>">Editar</a>

                            <a class="btn deep-orange col s6" href="<?php echo e(route('admin.cursos.delete', $registro->id)); ?>">Excluir</a>
                        
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <a class="waves-effect waves-light btn-large" href="<?php echo e(route('admin.cursos.adicionar')); ?>">Adicionar</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DOCUMENTOS\TRABALHOS DE ARQUIVOS\LARAVEL\PROJETO LARAVEL\curso-laravel\cursoLaravel\resources\views/admin/cursos/index.blade.php ENDPATH**/ ?>
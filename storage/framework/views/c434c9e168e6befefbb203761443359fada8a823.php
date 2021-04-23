

<?php $__env->startSection('titulo', 'Contato'); ?>
    

<?php $__env->startSection('conteudo'); ?>
    <h3>Essa é minha view Index</h3>

    <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($contato->nome); ?></p>
        <p><?php echo e($contato->telefone); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Antonio Rony\Desktop\curso-laravel\cursoLaravel\resources\views/contato/index.blade.php ENDPATH**/ ?>
<?php echo $__env->make('layout._includes.topo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo $__env->yieldContent('conteudo'); ?>    
    </div>
    

<?php echo $__env->make('layout._includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Antonio Rony\Desktop\curso-laravel\cursoLaravel\resources\views/layout/site.blade.php ENDPATH**/ ?>
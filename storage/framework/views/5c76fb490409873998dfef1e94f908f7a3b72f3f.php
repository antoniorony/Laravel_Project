<?php echo $__env->make('layout._includes.topo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <nav>
            <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <?php if(Auth::guest()): ?>
                <li><a href="<?php echo e(route('site.login')); ?>">Login</a></li>
                <?php else: ?>
                <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                <li><a href="<?php echo e(route('admin.cursos')); ?>">Cursos</a></li>
                <li><a href="<?php echo e(route('site.login.sair')); ?>">Sair</a></li>
                <?php endif; ?>
            </ul>
            <ul class="side-nav" id="mobile">
                <li><a href="/">Home</a></li>
                <li><a href="<?php echo e(route('admin.cursos')); ?>">Cursos</a></li>

            </ul>
            </div>
        </nav>  
        <?php echo $__env->yieldContent('conteudo'); ?>  
    </div>
    

<?php echo $__env->make('layout._includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH E:\DOCUMENTOS\TRABALHOS DE ARQUIVOS\LARAVEL\PROJETO LARAVEL\curso-laravel\cursoLaravel\resources\views/layout/site.blade.php ENDPATH**/ ?>
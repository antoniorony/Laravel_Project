

<?php $__env->startSection('titulo', 'Cursos'); ?>
    

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
            <form class="" action="<?php echo e(route('site.login.entrar')); ?>" method = "post">
                <?php echo csrf_field(); ?>

                <div class="input-field">
                    <input type="text" name="email">
                    <label for="">e-mail</label>
                </div>

                <div class="input-field">
                    <input type="password" name="senha">
                    <label for="">Senha</label>
                </div>

                <button class="btn deep-orange">Entrar</button>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DOCUMENTOS\TRABALHOS DE ARQUIVOS\LARAVEL\PROJETO LARAVEL\curso-laravel\cursoLaravel\resources\views/login/index.blade.php ENDPATH**/ ?>
<div class="input-field">
    <input type="text" name="titulo" id="titulo" value="<?php echo e(isset($registro->titulo) ? $registro->titulo : ''); ?>">
    <label for="">Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" id="descricao" value="<?php echo e(isset($registro->descricao) ? $registro->descricao : ''); ?>">
    <label for="">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" id="titulo" value="<?php echo e(isset($registro->valor) ? $registro->valor : ''); ?>">
    <label for="">Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>File</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
<?php if(isset($registro->imagem)): ?>
<div class="input-field">
    <img src="<?php echo e(asset($registro->imagem)); ?>" alt="$registro->titulo" width="200"/>
</div>
<?php endif; ?>
<div class="input-field">
    <p> 
      <input type="checkbox" name="publicado" class="filled-in" id="filled-in-box" checked="checked" <?php echo e(isset($registro->publicado) && $registro->publicado == "sim" ? 'checked' : ''); ?> />
      <label for="filled-in-box">Publicar?</label>
    </p>
    <br><br>
</div><?php /**PATH E:\DOCUMENTOS\TRABALHOS DE ARQUIVOS\LARAVEL\PROJETO LARAVEL\curso-laravel\cursoLaravel\resources\views/admin/cursos/_form.blade.php ENDPATH**/ ?>
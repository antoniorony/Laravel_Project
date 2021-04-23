<div class="input-field">
    <input type="text" name="titulo" id="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
    <label for="">Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" id="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label for="">Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" id="titulo" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
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
@if(isset($registro->imagem))
<div class="input-field">
    <img src="{{ asset($registro->imagem) }}" alt="$registro->titulo" width="200"/>
</div>
@endif
<div class="input-field">
    <p> 
      <input type="checkbox" name="publicado" class="filled-in" id="filled-in-box" checked="checked" {{isset($registro->publicado) && $registro->publicado == "sim" ? 'checked' : '' }} />
      <label for="filled-in-box">Publicar?</label>
    </p>
    <br><br>
</div>
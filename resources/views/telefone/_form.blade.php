
       <div class="mb-3 {{$errors->has('titulo')? 'has-error' : ''}}">
      <label for="titulo" class="form-label">titulo</label>
      <input type="text" class="form-control" id="" name="titulo" placeholder="Nome" value="{{isset($telefone->titulo) ? $telefone->titulo:''}}">
      @if ($errors->has('titulo'))
      <span class="help-block">
        <strong>{{$errors->first('titulo')}}</strong>
        </span> 
   @endif
    </div>

    <div class="mb-3 {{$errors->has('telefone')? 'has-error' : ''}}">
    <label for="telefone" class="form-label">Número</label>
    <input type="telefone" class="form-control" id="" name="telefone" placeholder="E-mail" value="{{isset($telefone->telefone) ? $telefone->telefone:''}}">
    @if ($errors->has('telefone'))
    <span class="help-block">
      <strong>{{$errors->first('telefone')}}</strong>
      </span> 
 @endif
  </div>

  


       <div class="mb-3 {{$errors->has('nome')? 'has-error' : ''}}">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="" name="nome" placeholder="Nome" value="{{isset($cliente->nome) ? $cliente->nome:''}}">
      @if ($errors->has('nome'))
         <span class="help-block">
           <strong>{{$errors->first('nome')}}</strong>
           </span> 
      @endif
    </div>

    <div class="mb-3  {{$errors->has('email')? 'has-error' : ''}}">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="" name="email" placeholder="E-mail" value="{{isset($cliente->email) ? $cliente->email:''}}">
  @if ($errors->has('email'))
         <span class="help-block">
           <strong>{{$errors->first('email')}}</strong>
           </span> 
      @endif
    </div>

  <div class="mb-3  {{$errors->has('endereco')? 'has-error' : ''}}">
  <label for="endereco" class="form-label">Endereço</label>
  <input type="text" class="form-control" id="" name="endereco" placeholder="Endereço" value="{{isset($cliente->endereco) ? $cliente->endereco:''}}">
  @if ($errors->has('endereco'))
  <span class="help-block">
    <strong>{{$errors->first('endereco')}}</strong>
    </span> 
@endif
</div>




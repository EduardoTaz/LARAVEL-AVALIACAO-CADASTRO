
@foreach ($clientes as $cliente)
  <div>
    {{$cliente->nome}} 
    {{$cliente->cpf}} 
    {{$cliente->email}}
  </div>
@endforeach
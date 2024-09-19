

@foreach ($vendedores as $vendedor)
  <div>
    {{$vendedor->nome}} 
    {{$vendedor->matricula}} 
    {{$vendedor->comissao}}
  </div>
@endforeach


@foreach ($produtos as $produto)
  <div>
    {{$produto->nome}} 
    {{$produto->descricao}} 
    {{$produto->preco}}
  </div>
@endforeach
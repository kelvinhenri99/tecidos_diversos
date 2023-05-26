@extends('layout.main')
@section('content')

<div class="topProducts">
  <h1>Manutenção de Produtos</h1>
  <div class="classInputProducts">
    <a href="/products/create"><input type="button" value="Adicionar"></a>
    <input type="search" placeholder="Pesquisar">
  </div>
</div>

<div class="tableProducts">
  <table>
    <tr>
      <th>ID</th>
      <th>SKU</th>
      <th>DESCRIÇÃO</th>
      <th>VALOR CUSTO</th>
      <th></th>
    </tr>
    @foreach ($data as $products)
      <tr>
        <td>  {{ $products['id'] }} </td>
        <td> <a href="/products/show/{{ $products['id'] }}">{{ $products['sku'] }}</a> </td>
        <td> {{ $products['descricao'] }} </td>
        <td> R$ {{ $products['valorCusto'] }} </td>
        <td class="trash"> <a href="{{ route('delete', $products['id']) }}"><ion-icon name="trash"></ion-icon></a> </td>
      </tr>
    @endforeach
  </table>
</div>

@endsection

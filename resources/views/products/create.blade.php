@extends('layout.main')
@section('content')

<div class="topProducts">
  <h1>Inclusão de Produtos</h1>
</div>

<div class="productsStore">
  <form action="/products/store" method="post">
    @csrf
    <div class="formStoreProduct">
      <p>ID</p>
      <input type="number" name="id" disabled>
      <p>SKU</p>
      <input type="text" name="sku" minlength="5" maxlength="10">
      <p>DESCRIÇÃO</p>
      <input type="text" placeholder="Campo não pode ser vazio" name="descricao" required minlength="5" maxlength="250">
      <p>DATA REFERÊNCIA</p>
      <input type="date" name="dataReferencia" required>
      <p>VALOR REFERÊNCIA</p>
      <input type="text" placeholder="Valor deverá ser superior a 1,00" id="price" name="valorCusto" min="1" required step="0.01" min="0.01">
      <span>RS</span>
    </div>
    <div class="buttonStore">
      <a href="/products"><input type="button" value="Voltar"></a>
      <input type="submit" value="Gravar">
    </div>
  </form>
</div>

@endsection

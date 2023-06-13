<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Product_Category') }}
      </h2>
  </x-slot>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex w-100 justify-content-between">
              <p style="padding-left: 20px; padding-right: 20px;">Categoria</p>
              <div class="d-flex justify-content-end mb-3">
            </div>
          </div>
        </div>  
          
        <div class="card-body">
          <form action="{{ route('product-category.update', $product_category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row">
                    <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-12">
                      <label for="product_category_name">Nome:</label>
                      <input type="text" class="form-control" id="product_category_name" name="product_category_name"  value="{{ $product_category->product_category_name }}" required>
                    </div>
                </div>
            </div>
          
            <br>
            <div style="padding-left: 25px; padding-right: 25px;" class="d-flex justify-content-start">
                <button type="submit" class="btn btn-primary me-2">Salvar alterações</button>
                <a href="{{ route('product-category.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<script>

</script>
</x-app-layout>

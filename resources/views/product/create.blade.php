<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <div class="d-flex w-100 justify-content-between">
                    <p>Criar produto</p>
                </div>
              </div>

              <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-4">
                    <label for="product_name">Nome:</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="product_category_id">Categoria:</label>
                    <select class="form-select" name="product_category_id" id="product_category_id">
                        <option value="#">Selecione...</option>
                        @foreach($product_categories as $product_category)
                            <option required value="{{ $product_category->id }}">{{ $product_category->product_category_name }} </option>
                        @endforeach
                    </select>
                    @error('product_category_id')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-4">
                    <label for="brand_id">Marca:</label>
                    <select class="form-select" name="brand_id" id="brand_id" required>
                        <option value="#">Selecione...</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endforeach
                    </select>
                    @error('brand_id')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <br>

                <div style="padding-left: 25px; padding-right: 25px;" class="d-flex justify-content-start">
                  <button type="submit" class="btn btn-primary me-2">Salvar</button>
                  <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
</x-app-layout>

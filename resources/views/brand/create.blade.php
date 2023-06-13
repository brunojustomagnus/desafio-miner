<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Brand') }}
        </h2>
    </x-slot>
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <div class="d-flex w-100 justify-content-between">
                    <p>Criar Marca de produto</p>
                </div>
              </div>

              <form action="{{ route('brand.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-3">
                    <label for="brand_name">Nome:</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                  </div>
                </div>
                <br>

                <div style="padding-left: 25px; padding-right: 25px;" class="d-flex justify-content-start">
                  <button type="submit" class="btn btn-primary me-2">Salvar</button>
                  <a href="{{ route('brand.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
</x-app-layout>

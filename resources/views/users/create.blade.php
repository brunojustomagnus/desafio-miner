<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <div class="d-flex w-100 justify-content-between">
                    <p>Criar Usuário</p>
                </div>
              </div>

              <form action="{{ route('users.store') }}" method="POST">
                  @csrf
                  <div class="row">
                    <h5 style="padding-left: 35px; padding-right: 35px;">Dados Pessoais</h5>
                    <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-3">
                      <label for="user_name">Nome:</label>
                      <input type="text" class="form-control" id="user_name" name="user_name" required>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="user_category_id">Categoria:</label>
                      <select class="form-select" name="user_category_id" id="user_category_id" required>
                        <option value="#">Selecione...</option>
                        <option value="1">Administrador</option>
                        <option value="2">Comum</option>
                      </select>
                    </div>
                    <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-3">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-3">
                      <label for="password">Senha:</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                  </div>
                  <br>
  
                  <div style="padding-left: 25px; padding-right: 25px;" class="d-flex justify-content-start">
                    <button type="submit" class="btn btn-primary me-2">Salvar</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
</x-app-layout>

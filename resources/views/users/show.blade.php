<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('User') }}
      </h2>
  </x-slot>
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex w-100 justify-content-between">
              <p style="padding-left: 20px; padding-right: 20px;">Usuário</p>
              <div class="d-flex justify-content-end mb-3">
            </div>
          </div>
        </div>  
          
        <div class="card-body">
          <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="row">
                <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-3">
                  <label for="user_name">Nome:</label>
                  <input type="text" class="form-control" id="user_name" name="user_name"  value="{{ $user->user_name }}" required>
                </div>
                <div class="form-group col-md-3">
                  <label for="user_category_id">Categoria:</label>
                  <select class="form-select" name="user_category_id" id="user_category_id" required>
                      @foreach($categories as $category)
                          <option value="{{ $category->id }}" {{ $category->id == $user->user_category_id ? 'selected' : '' }}>
                              {{ $category->category_users_name }}
                          </option>
                      @endforeach
                  </select>
                </div>
                <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-3">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email"  value="{{ $user->email }}" required>
                </div>
                <div style="padding-left: 35px; padding-right: 35px;" class="form-group col-md-3">
                  <label for="password">Senha:</label>
                  <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" required>
                </div>
              </div>
            </div>
            <br>
            <div style="padding-left: 25px; padding-right: 25px;" class="d-flex justify-content-start">
                <button type="submit" class="btn btn-primary me-2">Salvar alterações</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<script>

</script>
</x-app-layout>

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
                  <h5 style="padding-left: 35px; padding-right: 35px;">Olá Miner!</h5>
                  <br><br>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<script>
 $('#myModal').on('show.bs.modal', function (e) {
  if (!data) return e.preventDefault() // stops modal from being shown
})
</script>
</x-app-layout>

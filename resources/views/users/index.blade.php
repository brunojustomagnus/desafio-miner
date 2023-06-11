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
                <p>Usuários</p>
                  
                <div class="d-flex justify-content-end mb-3">
                  <div class="d-flex justify-content-end">
                    <a href="{{ route('users.create') }}" class="btn btn-primary">
                      + Usuário
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nome</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 pr-3">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td style="padding-left: 25px;">
                        <p  class="pr-2 text-x font-weight-regular mb-0">{{$user->id}}</p>
                      </td>
                      <td>
                        <p  class="ml-2 pr-2 text-x font-weight-regular mb-0">{{$user->user_name}}</p>
                      </td>
                      <td>
                        <p class="pr-2 text-x font-weight-regular mb-0">{{$user->email}}</p>
                      </td>
                      
                     

                      <td class="text-end">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm mr-2">
                            <i class="fa fa-eye"></i>
                        </a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm me-3" onclick="return confirm('Tem certeza que deseja excluir esse usuário?');">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Links de paginação -->
            <br><br>
            <nav>
             <ul class="pagination pagination-sm">
               @if ($users->onFirstPage())
                 <li class="page-item disabled">
                     <span class="page-link">&laquo;</span>
                 </li>
               @else
                 <li class="page-item">
                     <a class="page-link btn-sm" href="{{ $users->previousPageUrl() }}" rel="prev">&laquo;</a>
                 </li>
               @endif
               
               @if ($users->hasMorePages())
                 <li class="page-item">
                     <a class="page-link btn-sm" href="{{ $users->nextPageUrl() }}" rel="next">&raquo;</a>
                 </li>
               @else
                 <li class="page-item disabled">
                     <span class="page-link">&raquo;</span>
                 </li>
               @endif
             </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>

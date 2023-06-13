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
                <p>Marcas de produtos</p>
                  
                <div class="d-flex justify-content-end mb-3">
                  <div class="d-flex justify-content-end">
                    <a href="{{ route('brand.create') }}" class="btn btn-primary">
                      + Marca
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
                      <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 pr-3">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($brand as $b)
                    <tr>
                      <td style="padding-left: 25px;">
                        <p  class="pr-2 text-x font-weight-regular mb-0">{{$b->id}}</p>
                      </td>
                      <td>
                        <p  class="ml-2 pr-2 text-x font-weight-regular mb-0">{{$b->brand_name}}</p>
                      </td>
                      <td class="text-end">
                        @if(auth()->user()->user_category_id == 1 || auth()->user()->user_category_id == 2)
                        <a href="{{ route('brand.show', $b->id) }}"class="btn btn-primary btn-sm mr-2">
                            <i class="fas fa-eye"></i>
                        </a>
                        @endif
                        @if(auth()->user()->user_category_id == 1)
                        <form action="{{ route('brand.destroy', $b->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm me-3" onclick="return confirm('Tem certeza que deseja excluir essa marca?');">
                              <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        @endif
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
               @if ($brand->onFirstPage())
                 <li class="page-item disabled">
                     <span class="page-link">&laquo;</span>
                 </li>
               @else
                 <li class="page-item">
                     <a class="page-link btn-sm" href="{{ $brand->previousPageUrl() }}" rel="prev">&laquo;</a>
                 </li>
               @endif
               
               @if ($brand->hasMorePages())
                 <li class="page-item">
                     <a class="page-link btn-sm" href="{{ $brand->nextPageUrl() }}" rel="next">&raquo;</a>
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

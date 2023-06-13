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
                <p>Produtos</p>
                  
                <div class="d-flex justify-content-end mb-3">
                  @if(auth()->user()->user_category_id == 1 || auth()->user()->user_category_id == 2)
                  <div class="d-flex justify-content-end">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">
                      + Produto
                    </a>
                  </div>
                  @endif
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categoria</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Marca</th>
                      <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 pr-3">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                    <tr>
                      <td style="padding-left: 25px;">
                        <p  class="pr-2 text-x font-weight-regular mb-0">{{$product->id}}</p>
                      </td>
                      <td>
                        <p  class="ml-2 pr-2 text-x font-weight-regular mb-0">{{$product->product_name}}</p>
                      </td>
                      <td>
                        <p  class="ml-2 pr-2 text-x font-weight-regular mb-0">{{$product->categoryProduct->product_category_name}}</p>
                      </td>
                      <td>
                        <p  class="ml-2 pr-2 text-x font-weight-regular mb-0">{{$product->brand->brand_name}}</p>
                      </td>
                      <td class="text-end">
                        @if(auth()->user()->user_category_id == 1 || auth()->user()->user_category_id == 2)
                          <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary btn-sm mr-2">
                              <i class="fas fa-eye"></i>
                          </a>
                        @endif
                        @if(auth()->user()->user_category_id == 1)
                          <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm me-3" onclick="return confirm('Tem certeza que deseja excluir esse produto?');">
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
               @if ($products->onFirstPage())
                 <li class="page-item disabled">
                     <span class="page-link">&laquo;</span>
                 </li>
               @else
                 <li class="page-item">
                     <a class="page-link btn-sm" href="{{ $products->previousPageUrl() }}" rel="prev">&laquo;</a>
                 </li>
               @endif
               
               @if ($products->hasMorePages())
                 <li class="page-item">
                     <a class="page-link btn-sm" href="{{ $products->nextPageUrl() }}" rel="next">&raquo;</a>
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

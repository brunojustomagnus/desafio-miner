<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <style>
    .text-yellow {
        color: rgb(231, 181, 41);
    }
    .text-red {
        color: rgb(248, 60, 60);
    }
    .text-green {
        color: rgb(88, 202, 23);
    }
    .custom-font-size-1 {
        font-size: 1.25rem; /* Ajuste o valor conforme necessário */
    }
    .font-size-media {
        font-size: 1.40rem; /* Ajuste o valor conforme necessário */
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Miner - Painel Administrativo
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{url('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{url('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/474f21e7d8.css" crossorigin="anonymous">
  
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/f90ae594e1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YT6oGWV6q3K6UQ1wSng8SvQx7LzZhZnBjZnW4d/JWSV7cM1UDKjV7WIO0S2v7xX9zI0o7V0/4mdBv7JGcWX+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{url('/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ route('dashboard')}}">
        <img src="{{url('/assets/img/logominer.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Miner Tecnologia</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        @if(auth()->user()->user_category_id == 1)
        <li class="nav-item">
          <a class="nav-link active" href="{{route('dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-pie-35 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administrativo</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('users.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Usuários</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="{{ route('product-category.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Categorias de produtos</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="{{ route('brand.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Marcas</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="{{ route('product.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Produtos</span>
          </a>
        </li> 
        @endif
        @if(auth()->user()->user_category_id == 2)
        <li class="nav-item">
          <a class="nav-link active" href="{{route('dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-pie-35 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">GERENCIA</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('product-category.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Categorias de produtos</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="{{ route('brand.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Marcas</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="{{ route('product.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Produtos</span>
          </a>
        </li>
        @endif
        @if(auth()->user()->user_category_id == 3)
        <li class="nav-item">
          <a class="nav-link active" href="{{route('dashboard')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-chart-pie-35 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">COMUM</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('product.index')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/clients-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Produtos</span>
          </a>
        </li> 
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <img src="{{url('/assets/img/logout-3-icon.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            </div>
            <span class="nav-link-text ms-1">Sair</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
      </ul>
    </div>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
   <!-- Navbar -->
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
   <div class="container-fluid py-4">
        {{ $slot }}
   </div>

  </main>

  <!--   Core JS Files   -->
  <script src="{{url('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{url('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{url('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{url('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{url('/assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    $(document).ready(function() {
        $('.modal').modal();
    });
</script>
  @if(session('alert'))
    <script>
      Swal.fire({
          title: "{{ session('alert.title') }}",
          text: "{{ session('alert.text') }}",
          icon: "{{ session('alert.icon') }}",
          timer: "{{ session('alert.timer') }}",
          timerProgressBar: {{ session('alert.timerProgressBar') ? 'true' : 'false' }},
          showConfirmButton: {{ session('alert.showConfirmButton') ? 'true' : 'false' }}
      });
    </script>
  @endif
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  @include('includes.style')
  @stack('addon-style')
  @livewireStyles
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    <!-- Sidebar Start -->
    @include('includes.sidebar')
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('includes.navbar')
      <!--  Header End -->
      <div class="container-fluid">
        @yield('content')
      </div>
    </div>
  </div>
  @include('includes.script')
  <script>
    let sessionSuccess = @json(session('success'));
    let sessionError   = @json(session('error'));

    if (sessionSuccess != null){
      Swal.fire({
        icon: 'success',
        title: sessionSuccess,
        showConfirmButton: true,
        timer: 2200
      })
    }
    if (sessionError != null){
      Swal.fire({
        icon: 'success',
        title: sessionError,
        showConfirmButton: true,
        timer: 2200
      })
    }

    console.log(session);
  </script>
  @stack('addon-script')
  @livewireScripts
</body>

</html>
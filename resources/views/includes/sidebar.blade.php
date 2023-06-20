@php
  $menus = [
      'category' => [
          'title' => 'Kategori',
          'url' => '/admin/category',
          'name' => 'admin/category',
          'icon' => 'tag',
        ],
        'course' => [
          'title' => 'Course',
          'url' => '/admin/course',
          'name' => 'admin/course',
          'icon' => 'book',
        ],
        'order' => [
          'title' => 'Order',
          'url' => '/admin/order',
          'name' => 'admin/order',
          'icon' => 'basket',
        ],
        'student' => [
          'title' => 'Murid',
          'url' => '/admin/student',
          'name' => 'admin/student',
          'icon' => 'school',
        ],
        'admin' => [
          'title' => 'Admin',
          'url' => '/admin/admin',
          'name' => 'admin/admin',
          'icon' => 'users',
        ],
];
  // dd(request()->is('admin/category*'));
@endphp
<aside class="left-sidebar">
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="./index.html" class="text-nowrap logo-img">
        <img src="/template/assets/images/logos/dark-logo.svg" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        
        {{-- divider --}}
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="/" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>

         {{-- divider --}}
         <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">MENU</span>
        </li>

        @foreach ($menus as $index => $menu )
          <li class="sidebar-item 
          @if (request()->is($menu['name'].'*'))
            active selected
          @endif">
            <a class="sidebar-link" href="{{ $menu['url'] }}" aria-expanded="false">
              <span>
                <i class="ti ti-{{ $menu['icon'] }}"></i>
              </span>
              <span class="hide-menu">{{ $menu['title'] }}</span>
            </a>
          </li>
        @endforeach
        
      </ul>
    </nav>
  </div>
</aside>
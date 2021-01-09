@if (Auth()->user()->role == 1)   {{-- System Admin Sidebar --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link">
      <img src="{{asset('images/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">@lang('sentence.TicketEasy')</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::is('Event*') ? 'active' : ''}}">
              <i class="nav-icon far fa-star"></i>
              <p>
                @lang('sentence.Events')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Event.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('sentence.Events List')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Event.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('sentence.New Event')</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::is('Organizer*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                @lang('sentence.Organizers')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Organizer.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('sentence.Organizers List')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Organizer.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('sentence.New Organizer')</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::is('User*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                @lang('sentence.Users')
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('User.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('sentence.Users List')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('User.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('sentence.New User')</p>
                </a>
              </li>
            </ul>
          </li>
  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
@elseif (Auth()->user()->role == 2) {{-- OrganizerSidebar --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/home')}}" class="brand-link">
    <img src="{{asset('images/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">@lang('sentence.TicketEasy')</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('images/user.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
       
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link {{ Request::is('Event*') ? 'active' : ''}}">
            <i class="nav-icon far fa-star"></i>
            <p>
              @lang('sentence.Events')
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('Event.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>@lang('sentence.Events List')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('Event.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>@lang('sentence.New Event')</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
@elseif (Auth()->user()->role == 3) {{-- User Sidebar --}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/home')}}" class="brand-link">
    <img src="{{asset('images/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">@lang('sentence.TicketEasy')</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('images/user.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
       
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link {{ Request::is('Event*') ? 'active' : ''}}">
            <i class="nav-icon far fa-star"></i>
            <p>
              @lang('sentence.Events')
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('Event.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>@lang('sentence.Events List')</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('Event.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>@lang('sentence.New Event')</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
@endif
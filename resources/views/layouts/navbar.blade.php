<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/home') }}" class="nav-link">@lang('sentence.Home')</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">@lang('sentence.Contact')</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- language Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          @if (str_replace('_', '-', app()->getLocale()) == 'ar')
          <img src="{{asset('images//sd.png')}}" alt="Arabic" class="img-size-50 mr-3">   
          @else
          <img src="{{asset('images//us.png')}}" alt="English" class="img-size-50 mr-3">   
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{url('lang/ar')}}" class="dropdown-item">
            <!-- lang Start -->
            <div class="media">
              <img src="{{asset('images//sd.png')}}" alt="Arabic" class="img-size-50 mr-3 "> 
            </div>
            <!-- lang End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{url('lang/en')}}" class="dropdown-item">
            <!-- lang Start -->
            <div class="media">
              <img src="{{asset('images/us.png')}}" alt="English" class="img-size-50 mr-3 "> 
            </div>
            <!-- lang End -->
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form-2').submit();" class="nav-link">
          <img class="logout" src="{{ asset('images/logout.png') }}" alt="{{ __('logout') }}"> @lang('sentence.Logout')
        </a>
        <form id="logout-form-2" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
      </li>
    </ul>
</nav>
<!-- /.navbar -->

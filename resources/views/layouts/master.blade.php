@include('layouts.header')
@if (str_replace('_', '-', app()->getLocale()) == 'en')
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" dir="ltr">
@else
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" dir="rtl">
@endif
<div class="wrapper"> 
  @include('layouts.navbar')        
  @include('layouts.sidebar')
  @auth
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('content-header')
        <hr>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (session()->has('success'))
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            <i class="fa fa-check fa-lg"></i>  {{ trans('sentence.'.session()->get('success').'')}}.  
        </div>    
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger  alert-dismissible fade show " role="alert">
              {{ trans('sentence.'.session()->get('error').'')}}  <i class="fa fa-thumbs-down fa-lg"></i>
            </div>    
        @endif
          @yield('content')

        @else
          @yield('content')
      </div>
    </section>
  </div>
</div>
@endauth
@include('layouts.footer')

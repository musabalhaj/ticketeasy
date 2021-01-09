<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>

<!-- Main Footer -->
<footer class="main-footer d-none d-sm-inline">
  <strong>@lang('sentence.Copyright')&copy; 2020 <a href="http://TicketEasy.com">@lang('sentence.TicketEasy')</a>.</strong>
  @lang('sentence.All rights reserved.')
</footer>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
    {{--  <script src="{{ asset('js/demo.js') }}"></script>  --}}
    @if (str_replace('_', '-', app()->getLocale()) == 'en')
    <script src="{{ asset('js/backend.js') }}"></script>
    @elseif (str_replace('_', '-', app()->getLocale()) == 'ar')
    <script src="{{ asset('js/backend-rtl.js') }}"></script>
    @endif
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
</body>
</html>

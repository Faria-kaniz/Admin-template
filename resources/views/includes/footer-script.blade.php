</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('js//jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="'{{asset('js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>

@yield('custom_scripts')
</body>
</html>

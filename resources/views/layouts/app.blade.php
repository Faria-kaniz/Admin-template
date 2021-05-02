@include('includes.header')
@include('includes.header_main')
@include('includes.sidebar')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            WELCOME TO OUR WORLD
            <small>Thanks For Login</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
    </section>
    @yield('content')
    <!-- Main content -->

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('includes.footer')
@include('includes.right-sidebar')
@include('includes.footer-script')

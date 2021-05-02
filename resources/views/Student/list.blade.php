

@extends('layouts.app')

@section('custom_css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')

    <section class="content">
        <!-- Horizontal Form -->
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif


        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Student List</h3>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($userList as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['class'] }}</td>
                        <td>{{ $user['section'] }}</td>
                        <td>{{ $user['roll'] }}</td>
                    </tr>
                    @endforeach
                </table>


            </div>

    </div>

    <div class="box-footer">
        Footer
    </div>

    </section>

@endsection



@section('custom_scripts')
    <!-- DataTables -->
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection

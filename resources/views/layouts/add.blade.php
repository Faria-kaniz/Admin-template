@include('includes.header')

<div class="box-body" style="margin-left:300px; align:center;">
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>

        </div>

    @endif
    <form method="post"  action="{{route('student.store')}}">
        @csrf
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border" style="text-align:center;">
                    <h3 class="box-title">Create Student Form</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputName3" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName3" name="name" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Put Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputRoll3" class="col-sm-2 control-label">Roll</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputRoll3" placeholder="ROLL">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputclass3" class="col-sm-2 control-label">Class</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputclass3" placeholder="Enter Your Class">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputSec3" class="col-sm-2 control-label">Section</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSec3" placeholder="Enter your Section">
                            </div>
                        </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Add Now</button>
                    </div>

        </div>






    </form>
</div>



@extends('layout/admin')
 @section('content')
 <div class="col-md-12">
                    <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Take Attendance</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="/attendance/ {{$attd->id}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h2 class="text-center my-4 text-bold text-primary">Date : {{ date("l, d F Y", strtotime($attd->date))}}</h2>
                                    <div class="row">
                                        <table class="table table-striped table-bordered"> 
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Name</th>
                                                    
                                                    <th>Attendance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form action="/attendance" method="post">
                                                    @csrf
                                                    @foreach($attendances as $key => $attendance)
                                                        <tr>
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ $attendance->Username }}</td>
                                                            
                                                            <input type="hidden" name="employee_ids[]" value="{{ $attendance->pivot->employee_id }}">
                                                            <td>
                                                                {{-- <input type="radio" name="attendance[{{ $employee->id }}]" value="1" required>Present
                                                                <input type="radio" name="attendance[{{ $employee->id }}]" value="0">Absent --}}
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" name="attendance[{{ $attendance->pivot->employee_id }}]" value="1" required {{ $attendance->pivot->status == 1 ? 'checked' : '' }} class="custom-control-input"><span class="custom-control-label">Present</span>
                                                                </label>
                                                                <label class="custom-control custom-radio">
                                                                    <input type="radio" name="attendance[{{ $attendance->pivot->employee_id }}]" value="0" {{ $attendance->pivot->status == 0 ? 'checked' : '' }} class="custom-control-input"><span class="custom-control-label">Absent</span>
                                                                </label>
                                                               
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </form>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                                </form>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Update</button>
                                </div>
                            
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->     
                                       
                                        
 @stop
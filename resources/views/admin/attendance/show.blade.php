

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
                            <form role="form" action="/attendance" method="post">
                                @csrf
                                <div class="card-body">
                                    <h2 class="text-center my-4 text-bold text-primary">Today : {{ date("l, d F Y", strtotime($attd_date->date))}}</h2>
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
                                            @php
                                                $i=1;
                                            @endphp
                                                <form action="#" method="post">
                                                    @csrf
                                                    @foreach($attendances as $attendance)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $attendance->Username }}</td>
                                                            
                                                            <input type="hidden" name="employee_ids[]" value="{{ $attendance->pivot->employee_id }}">
                                                            <td>
                                                                {{-- <input type="radio" name="attendance[{{ $employee->id }}]" value="1" required>Present
                                                                <input type="radio" name="attendance[{{ $employee->id }}]" value="0">Absent --}}
                                                                @if($attendance->pivot->status == '1')
                                                                   <div><span class="badge badge-success">present</span></div>
                                                                       
                                                                
                                                                @else
                                                                <div><span class="badge badge-danger">absent</span></div>
                                                               
                                                                @endif
                                                                       
                                                               
                                                               
                                                                
                                                               
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </form>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Take Attendance</button>
                                </div>
                            </form>
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
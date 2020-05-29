@extends('layout/admin')
 @section('content')
 <div class="col-md-12">
 
 <div class="container-fluid">
 <div class="text-right">
                <a href="/attendance/create"><button id="add_btn" type="submit" class="btn btn-sm "><i class="fa fa-plus-circle"></i> Add New Attendance</button></a>
                </div>
                <div class="form-group">
                </div>
                <div class="row">
                
                    
               
                
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ATTENDANCES LISTS</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Attendance Date</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Attendance Date</th>
                                        <th>Status</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($dates as $key => $date)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ date("l, d F Y", strtotime($date->date)) }}</td>
                                            <td>
                                                <div><span class="badge badge-success">{{$date->status}}</span></div>

                                            </td>
                                            <td class="text-center">
                                                <div >
                                                    <form action="/attendance/{{ $date->id }}" method="GET">
                                                        @csrf
                                                        <button type="submit" class=" btn btn-xs  btn-success"><i class="fa fa-eye"></i> View</button>                                           
                                                    </form>
                                                </div>
                                            </td>   
                                            <td>  
                                                <div >
                                                    <form action="/attendance/{{ $date->id }}/edit" method="GET">
                                                        @csrf
                                                        <button type="submit" class=" btn btn-xs  btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                                    
                                                    </form>
                                                </div>
                                            </td> 
                                            <td>     
                                                <div >
                                                    <form action="/attendance/{{ $date->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                            <button type="submit"class="btn btn-xs btn-danger" ><i class="fa fa-trash-o"></i> Delete</button>	
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div> <!-- Content Wrapper end -->
    
    
 </div>
                        
 @stop
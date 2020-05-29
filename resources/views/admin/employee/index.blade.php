@extends('layout/admin')
 @section('content')
 <div class="col-md-12"><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>EMAIL</th>
                                                <th>PHONE NUMBER</th>
                                                <th>VIEW PROFILE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @for($i=0;$i<count($data);$i++)
                                            <tr>
                                                <td>{{$data[$i]->id}}</td>
                                                <td>{{$data[$i]->Email}}</td>
                                                <td>gii</td>
                                                <td><button class="btn btn-primary"><a href="showemployee/{{$data[$i]->id}}" id="a-button">View profile</a></button></td>
                                            </tr>
                                        @endfor    
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
 </div>
 @stop
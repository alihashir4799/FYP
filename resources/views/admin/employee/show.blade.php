@extends('layout/admin')
 @section('content')
 <div class="col-md-12">
 

  
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Bootstrap Validation Form</h5>
                                <div class="card-body">
                                    <form  novalidate>
                                    @csrf
                                    <input name="_method" type="hidden" value="PUT">
                                    <div class="division"><h2 id="margin">Login information</h2></div>
                                    <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" name="name" disabled data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control" value="{{$employee->Email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">password</label>
                                            <input id="password" type="password" name="name" data-parsley-trigger="change" disabled required="" placeholder="Enter password" autocomplete="off" class="form-control" value="{{$employee->Password}}">
                                        </div>
                                        <div class="division"><h2 id="margin">Personal information</h2></div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" disabled value="Mark" required value="{{$employee->Firstname}}">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name"  disabled value="Otto" required value="{{$employee->Lastname}}">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustomUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationCustomUsername"  disabled placeholder="Username" aria-describedby="inputGroupPrepend" required value="{{$employee->Username}}">
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom03">City</label>
                                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" disabled required value="{{$employee->City}}">
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom04">State</label>
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" disabled required value="{{$employee->State}}">
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Zip</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip"  disabled required value="{{$employee->Zip}}">
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                
                                            </div>
                                        </div>
                                    </form>
                                    <form method="GET" action="/showemployee/{{$employee->id}}/edit">
                                                  @csrf
                                                 <button type="submit" class="btn btn-primary">Edit</button>
                                                </form>
                                </div>
                            </div>


 </div>
 @stop
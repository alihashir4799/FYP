@extends('layout/admin')
 @section('content')
 <div class="col-md-12">
   <select>
     <option>Highest payment to lowest</option>
       <option>Lowest payment to highest</option>
         <option>Less days to pay</option>
   </select>
   <br><br>
   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     <div class="card">
       <div class="card-body">
         <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered second" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                     <th>EMAIL</th>
                        <th>PAYMENT PENDING</th>
                          <th>SEND EMAIL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>XYZ@GMAIL.COM</td>
                  <td>560000</td>
                  <td><button class="btn btn-primary"><a href="editemployee">Send Email</a></button></td>
                </tr>
              </tbody>
                                        
            </table>
         </div>
        </div>
     </div>
    </div>
 </div>
 @stop
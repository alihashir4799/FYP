<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        //
        $data = Employee::all();
        return view('showemployee')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Employee;
        $data->Email = $request->input('employeesemail');
        $data->Password = $request->input('employeespassword');
        $data->Password = $request->input('employeespassword');
        $data->Firstname = $request->input('employeesfname');
        $data->Lastname = $request->input('employeeslname');
        $data->Username = $request->input('employeesuname');
        $data->City = $request->input('employeescity');
        $data->State = $request->input('employeesstate');
        $data->Zip = $request->input('employeeszip');
        $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $employee = Employee::find($id);
         return view('employeeprofile')->with('employee',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employee::find($id);
        return view('editemployee')->with('employee',$employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Employee::find($id);
        $data->Email = $request->input('employeesemail');
        $data->Password = $request->input('employeespassword');
        $data->Password = $request->input('employeespassword');
        $data->Firstname = $request->input('employeesfname');
        $data->Lastname = $request->input('employeeslname');
        $data->Username = $request->input('employeesuname');
        $data->City = $request->input('employeescity');
        $data->State = $request->input('employeesstate');
        $data->Zip = $request->input('employeeszip');
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}

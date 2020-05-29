<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Employee;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $dates = Attendance::latest()->groupBy('date')->get();
        
        return view('admin/attendance/index', compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = date('Y-m-d');

        //storing date if date is matched with $date 
        $att_date = Attendance::select('date')->where('date', $date)->first();
        
        //if not available then create 
        if (!$att_date){
            //insert todays date in attendance table
            $attendance = new Attendance;
            $attendance->date = date('Y-m-d');
            $attendance->month = strtolower(date('F'));
            $attendance->year = date('Y');
            $attendance->status = "marked";
            $attendance->save();
            //after insert get all employees
            $employees = Employee::all();
            //send employees array to create page
            return view("admin.attendance.create" , compact('employees'));
        }
            
        //if available then 
        else{
            return redirect("/attendance")->with('failed',"Today Attendance is already Taken");   
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = date('Y-m-d');
        
        //storing date if date is matched with $date 
        $attendance = Attendance::select('id')->where('date', $date)->first();

        //if $attd_id is available then
        if($attendance){
            //get employee_id array and triverse through it one by one using foreach loop
            foreach($request->employee_ids as $employee_id){

                //get attendance[$employee_id] array and triverse through it one by one
                $attendance->employees()->attach($employee_id,['status'=>$request->attendance[$employee_id]]);
                
            }

            return redirect("/attendance")->with('success',"Attendacne Created Successful");

        }
        else{
            return redirect("/attendance")->with('failed',"Attendacne already taken");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $attd_date = Attendance::find($id);
        

        $attendance = Attendance::find($id);
        //storing all the attendance of specific date including pivot table
        $attendances = $attendance->employees;
     
        return view('admin.attendance.show' , compact('attendances','attd_date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $attd = Attendance::find($id);
        $attendances = Attendance::find($id)->employees;
        
        return view('admin.attendance.edit' , compact('attendances','attd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $attendance = Attendance::find($id);

        foreach($request->employee_ids as $employee_id){

            $attendance->employees()->updateExistingPivot($employee_id,['status'=>$request->attendance[$employee_id]]);
        }
        return redirect("/attendance")->with('success',"Attendance Update Successful");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $attendance = Attendance::find($id);
        //deleting specific date attendance from pivot table
        $attendance->employees()->detach();
        //deleting attendance from attendance table
        $attendance->delete();

        return redirect("/attendance")->with('delete',"Attendance Deleted Successful");
    }
}

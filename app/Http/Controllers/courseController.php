<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\courseModel;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $courses = courseModel::all();
        return view('showAllCourse')->with('courses',$courses);
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
        $course = new courseModel;
        $course->Course_Name = $request->Course_Name;    
        $course->Teacher_Name = $request->Teacher_Name;  
        $course->Batch_Time = $request->Batch_Time;  
        $course->Teaching_Day = $request->Teaching_Day;
        $course->Semester = $request->Semester; 
        $course->save();
        return redirect('course');
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
        $course = courseModel::find($id);
        $course->Course_Name = $request->Course_Name;    
        $course->Teacher_Name = $request->Teacher_Name;  
        $course->Batch_Time = $request->Batch_Time;  
        $course->Teaching_Day = $request->Teaching_Day;
        $course->Semester = $request->Semester; 
        $course->save();
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $course = courseModel::find($id);
         $course->delete();
         return redirect('course');
    }
}

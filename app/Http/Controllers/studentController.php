<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentModel;
use App\courseModel;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $course = courseModel::all();
        $students = studentModel::all();
        return view('showAllStudent')->with('students',$students)->with('course',$course);
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

        $imageName = 'noimg.png';
      
        if($request->img){
$request->validate([
	'img' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
 ]);

$imageName = date('mdYHis').uniqid().'.'.$request->img->extension();
$request->img->move(public_path('uploaded_img'),$imageName);

}




        $student = new studentModel;
        $student->name = $request->name;   
        $student->img = $imageName;   
        $student->phone = $request->phone;  
        $student->course_id = $request->course_id;  
       
        $student->save();
        return redirect('student');
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
        $student = studentModel::find($id);

if($request->img){
    $request->validate([
        'img' => 'nullable|file|image|mimes:jpeg,png,jpg|max:5000'
     ]);
     if($student->img != 'noimg.png'){
        unlink(public_path('uploaded_img').'/'.$student->img);
    }

    $imageName = date('mdYHis').uniqid().'.'.$request->img->extension();
$request->img->move(public_path('uploaded_img'),$imageName);


}else{
    $imageName = $student->img;
}



        $student->name = $request->name;    
        $student->img = $imageName;  
        $student->phone = $request->phone;  
        $student->course_id = $request->course_id;  
       
        $student->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = studentModel::find($id);

        if($student->img != 'noimg.png'){
            unlink(public_path('uploaded_img').'/'.$student->img);
        }
        $student->delete();
        return redirect('student');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Group;
use App\Models\Course;


use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       echo"edit";
        $student=Student::find($id) ;
       $groups=Group::all();
       $courses=Course::all();
    //    return view('edit_data')->with('student',$student)->with('groups',$groups)->with('courses',$courses);
         return view('edit_data',compact('student','groups','courses'));
    }
   

public function update(Request $request, $id)
    {
        echo "update".$id;
        $name=$request['name'];
        $group_id=$request['group_id'];
        $course_id=$request['course_id'];
        $student=Student::findOrFail($id);
        
        $o=$student->update(array(
            "name"=>$name,
            "group_id"=>$group_id
        ));
      
        $student->courses()->sync($course_id);
         return redirect(route('students'));
        
        
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

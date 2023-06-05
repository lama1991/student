<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\Student;
use App\Models\Group;
use App\Models\Course;


use Illuminate\Http\Request;
=======

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
<<<<<<< HEAD
     *
     * @return \Illuminate\Http\Response
=======
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
     */
    public function index()
    {
        //
<<<<<<< HEAD
=======
        $students = Student::with('courses')->get();
        return view('index', ['students' => $students]);
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
    }

    /**
     * Show the form for creating a new resource.
<<<<<<< HEAD
     *
     * @return \Illuminate\Http\Response
=======
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
<<<<<<< HEAD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
=======
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
<<<<<<< HEAD
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
=======
     */
    public function show(string $id)
    {
        //
        $student = Student::where('id','=',$id)->with('courses')->first();
        return view('show', ['student' => $student]);

>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
    }

    /**
     * Show the form for editing the specified resource.
<<<<<<< HEAD
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
        
        
=======
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
    }

    /**
     * Remove the specified resource from storage.
<<<<<<< HEAD
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
=======
     */
    public function destroy(string $id)
    {
        //
        DB::table('students')->where('id', '=',$id)->delete();
        return self::index();
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
    }
}

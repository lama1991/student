<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;
// use PHPUnit\TextUI\Configuration\Group;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             //
             
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups=Group::all();
        $courses=Course::all();

      return  view('addstudent',compact(['groups','courses']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newstu = Student::create([
            'student_name' => $request->name,
            'group_id'=>$request->group
        ])->courses()->attach($request->course_id);
        // return redirect('/students');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

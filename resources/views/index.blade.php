<html>
    <center>
    <h1> Students</h1>
    @foreach($students as $student) 
        Name: {{ $student->student_name }}
        &nbsp;  &nbsp;
        Group : {{$student->group->group_name}}
       &nbsp;  &nbsp;
       @foreach ($student->courses as $course)
      Courses : {{ $course->course_name }}
       @endforeach
       &nbsp;  &nbsp;
       <a href="{{ route('students.show', $student->id) }}"> Show Student </a>
       <br><br> 
       @endforeach
   
    <br><br>
&nbsp;  &nbsp;

    </center>
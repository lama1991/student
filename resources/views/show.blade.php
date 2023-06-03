<html>
    <center>
    <h1> Students</h1>
        Name: {{ $student->student_name }}
        &nbsp;  &nbsp;
        Group : {{$student->group->group_name}}
       &nbsp;  &nbsp;
       @foreach ($student->courses as $course)
      Courses : {{ $course->course_name }}
      @endforeach
      &nbsp;  &nbsp;
      <a href="{{ route('students.edit', $student->id) }}"> Edit Student </a>
      <br><br>
      <form action="{{ route('students.destroy', $student->id) }}" method="POST">
     {{ method_field('DELETE') }}
     {{ csrf_field() }}
     <button class="btn btn-danger">Delete Student</button>
</form>
    </center>
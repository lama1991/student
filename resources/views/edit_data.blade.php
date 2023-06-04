
{{$student->id}}
<form method="POST" action="{{route('students.update',$student->id)}}">
    
      {{ method_field('PUT') }}
     {{ csrf_field() }}
     
        name:
        <input type="text" name="name" value="{{$student->name}}">
        <select name="group_id">
             <option value="{{$student->group->id}}" selected>{{$student->group->name}}</option>
             @foreach($groups as $group)
            
         
               <option value="{{$group->id}}">{{$group->name}}</option>
             @endforeach

       </select> 
       <select name="course_id[]" multiple>
             @foreach($courses as $course)
            

            <option value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
              
       </select> -->
       
       <input type="submit" value="update">


</form>
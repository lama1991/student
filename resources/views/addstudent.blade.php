<center><form method="POST" action="{{ route('students.store') }}">
	<label for="name">name</label>
    <input type="text" id="name"  name="name" required>
				@csrf
				
				<label for="group">groups:</label>
				<select name="group" id="group">
				@foreach($groups as $group)
				<option value="{!! $group->id !!}">{!! $group->group_name !!}</option>	
					@endforeach
				</select>


				<label for="courses">courses:</label>
				<select name="course_id[]" multiple='multiple' id="course">
				@foreach($courses as $course)
				<option value="{!! $course->id !!}">{!! $course->course_name !!}</option>
					@endforeach
				</select>
				<button type="submit">Add New</button></div>
			</form>

			
			</center>
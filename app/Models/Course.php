<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Course extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->belongsToMany(Student::class);

    }
}
=======
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_name'];

    public function students(): BelongsToMany
{
    return $this->belongsToMany(Student::class,'course_student');
}
}
//$student->courses()->attach([1]);
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864

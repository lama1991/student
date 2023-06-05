<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864

class Student extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['name', 'group_id'];
    public function group()
    {
         return $this->belongsTo(Group::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class);

    }
=======

    protected $fillable = ['student_name','group_id'];

    public function group(): BelongsTo
{
    return $this->belongsTo(Group::class);
}

public function courses(): BelongsToMany
{
    return $this->belongsToMany(Course::class,'course_student');
}

>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
}

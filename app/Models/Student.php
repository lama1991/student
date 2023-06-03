<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_name','group_id'];

    public function group(): BelongsTo
{
    return $this->belongsTo(Group::class);
}

public function courses(): BelongsToMany
{
    return $this->belongsToMany(Course::class,'course_student');
}

}

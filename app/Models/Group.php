<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Group extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
  
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
class Group extends Model
{
    use HasFactory;
    protected $fillable = ['group_name'];
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864
}

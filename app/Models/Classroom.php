<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    /** @use HasFactory<\Database\Factories\ClassroomFactory> */
    use HasFactory;

    protected $table = 'classrooms';
    protected $fillable = ['name'];

    // Scope untuk sorting otomatis
    public function scopeOrdered($query)
    {
        return $query->orderByRaw("CAST(SUBSTRING_INDEX(name, ' ', 1) AS UNSIGNED) ASC, SUBSTRING_INDEX(name, ' ', -1) ASC");
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'classroom_id');
    }
}

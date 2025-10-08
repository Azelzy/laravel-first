<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subject_id', 'phone', 'email', 'address'];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}

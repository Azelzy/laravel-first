<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guardian extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'job',
    'phone',
    'email',
    'address'
];

public function students()
{
    return $this->hasMany(Student::class, 'guardian_id');
}
}

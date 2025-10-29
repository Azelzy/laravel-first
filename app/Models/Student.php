<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    // Eager load relasi classroom secara otomatis
    protected $with = ['classroom'];

    // Kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'gender',
        'address',
        'classroom_id',
        'guardian_id',
    ];

    /**
     * Relasi ke model Classroom
     * Satu siswa berada di satu kelas
     */
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    /**
     * Relasi ke model Guardian (wali murid)
     * Satu siswa memiliki satu wali
     */
    public function guardian()
    {
        return $this->belongsTo(Guardian::class, 'guardian_id');
    }
}

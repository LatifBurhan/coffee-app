<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    // Menentukan nama tabel (opsional jika sudah sesuai standar jamak, tapi aman ditulis)
    protected $table = 'job_applications';

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'cover_letter',
        'cv_path',
        'status'
    ];

    // Relasi ke tabel Job
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}

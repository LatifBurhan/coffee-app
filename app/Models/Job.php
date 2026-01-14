<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Sambungkan ke tabel yang benar
    protected $table = 'job_vacancies';

    // Kolom yang boleh diisi
    protected $fillable = [
        'title',
        'type',
        'description',
        'is_active',
    ];
}

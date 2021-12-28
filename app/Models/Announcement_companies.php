<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement_companies extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'announcement_title',
        'domaine',
        'announcement_description',
        'pay',
        'type_of_contract',
        'time_work',
        'number_of_jobs',
    ];
}


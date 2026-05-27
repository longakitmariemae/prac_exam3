<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class student extends Model
{
     use HasFactory;
    protected $table = '3a_tbl';
    protected $primarykey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dobirth',
    ];
}

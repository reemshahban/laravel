<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $table = 'exam';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','choosed/not'];


}

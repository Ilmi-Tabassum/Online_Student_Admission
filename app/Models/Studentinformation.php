<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentinformation extends Model
{
    use HasFactory;
    protected $table = "studentinformation";
    protected $primaryKey = "student_id";

}

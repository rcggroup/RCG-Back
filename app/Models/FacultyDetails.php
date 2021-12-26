<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyDetails extends Model
{
    use HasFactory;
    protected $table = 'faculty_details';
    protected $fields = ['id','faculty_id','fee','duration','format','degree_type','fee_range_id','attendence'];
    public $timestamps = true;
}

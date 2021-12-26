<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'faculty';
    protected $fields = ['id','university_id','faculty_id','name','web','logo','mail'];
    public $timestamps = true;
}

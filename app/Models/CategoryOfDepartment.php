<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOfDepartment extends Model
{
    use HasFactory;
    protected $table = 'category_of_department';
    protected $fields = ['id','department_id','name'];
    public $timestamps = true;
}

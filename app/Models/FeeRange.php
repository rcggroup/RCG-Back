<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeRange extends Model
{
    use HasFactory;
    protected $table = 'fee_range';
    protected $fields = ['id','fee_range'];
    public $timestamps = true;
}

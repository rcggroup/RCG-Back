<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $table = 'university';
    protected $fields = ['id','name','web','logo','adress','area','email','created_at','updated_at','deleted_at'];
    public $timestamps = true;

    public function scopePrivateUniversities($query)
    {
        return $query->where('private','0');
    }
    public function scopePublicUniversities($query)
    {
        return $query->where('private','0');
    }
}

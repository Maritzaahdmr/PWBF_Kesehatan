<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class posyandu extends Model
{
    use SoftDeletes;

    protected $table = 'posyandu';

    public function tambah(){
        
    }
    public function posyandu(){
        return $this->belongsTo('App\Posyandu');
    }
}

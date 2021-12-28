<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kelurahan extends Model
{
        use SoftDeletes;
    protected $table = 'kelurahan';
    protected $dates = ['DELETED_AT'];

    public function tambah(){
        
    }
    public function kelurahan(){
        return $this->belongsTo('App\Kelurahan');
    }
}

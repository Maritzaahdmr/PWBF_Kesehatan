<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    protected $table = 'kelurahan';

    public function tambah(){
        
    }
    public function kelurahan(){
        return $this->belongsTo('App\Kelurahan');
    }
}

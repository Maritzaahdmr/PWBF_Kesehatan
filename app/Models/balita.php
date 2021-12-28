<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class balita extends Model
{
    use SoftDeletes;
    
    protected $table = 'balita';
    protected $dates = ['DELETED_AT'];


    public function tambah(){
        
    }
    public function balita(){
        return $this->belongsTo('App\Balita');
    }
    
}

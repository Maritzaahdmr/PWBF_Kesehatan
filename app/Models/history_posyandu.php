<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class history_posyandu extends Model
{
    use SoftDeletes;
    protected $table = 'history_posyandu';
    protected $dates = ['DELETED_AT'];

    public function tambah(){
        
    }
    public function history_posyandu(){
        return $this->belongsTo('App\History_Posyandu');
    }
    
}

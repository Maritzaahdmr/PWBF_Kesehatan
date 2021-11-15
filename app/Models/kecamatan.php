<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kecamatan extends Model
{
    use SoftDeletes;
    
    protected $table = 'kecamatan';

    public function tambah(){
        
    }
}

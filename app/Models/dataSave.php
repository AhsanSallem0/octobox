<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataSave extends Model
{
    
    use HasFactory;
    protected $table = 'data_saves';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}

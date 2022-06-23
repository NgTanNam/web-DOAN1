<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XaPhuong extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'name', 'type', 'maqh'
    ];
    protected $primaryKey = 'maPhuong';
    protected $table = 'Phuong';
}

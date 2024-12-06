<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turbidez extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $connection = 'makesoft';
    protected $table = 'turbidez';

    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    protected $fillable = [
        'valor'
    ];
}

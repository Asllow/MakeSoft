<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperatura1 extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'temperatura1';

    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    protected $fillable = [
        'valor'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umidade extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'umidade';

    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    protected $fillable = [
        'valor'
    ];
}

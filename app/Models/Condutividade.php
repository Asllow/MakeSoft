<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condutividade extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $connection = 'makesoft';
    protected $table = 'condutividade';

    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    protected $fillable = [
        'value'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PH extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'ph';

    public $timestamps = ['created_at'];
    const UPDATED_AT = null;

    protected $fillable = [
        'valor'
    ];
}

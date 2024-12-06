<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condutividade extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $connection = 'makesoft';

    protected $fillable = [
        'value'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'url', 'Imageable_id', 'Imageable_type'];
}

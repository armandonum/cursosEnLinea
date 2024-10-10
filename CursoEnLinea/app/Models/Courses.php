<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    const PUBLISHED = 1;  // publicado
    const PENDING = 2; // pendiente
    const REJECTED = 3; // rechazado

}

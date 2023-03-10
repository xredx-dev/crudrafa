<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class Tareas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_tarea',
        'description',
        'status'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // protected $table = "notas"; // de ser necesario, se indica manualmente el nombre de la tabla con la que trabajará este modelo
    
    protected $fillable = ['title', 'description', 'author', 'done']; // los campos permitidos

    // protected $guarded = ['id']; // lo opuesto a $fillable

    // protected $casts = ['deadline' => 'date']; // requiere que un tipo de valor cumpla su formato

    // protected $hidden = ['password']; // ocultar datos al serializar
    
    /*     
     $note = new Note();
     $note->title = "Hello world";
     $note->description = "Lorem ipsum..."
     $note->save();

     Note::get();ll
    */
}

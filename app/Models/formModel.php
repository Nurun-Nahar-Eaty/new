<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formModel extends Model
{
    protected $table='form_models';
    protected $fillable = ['name','fname','mname', 'email', 'age', 'dob' ,'department', 'gender',
    'address', 'language',];
}
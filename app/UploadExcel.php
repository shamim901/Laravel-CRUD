<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadExcel extends Model
{
    protected $fillable = [
        'name', 'email', 'password','phone',
    ];
}

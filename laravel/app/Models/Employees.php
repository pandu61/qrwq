<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'employees';

    public function companies()
    {
        return $this->belongsTo(Companies::class,  'company',  'id');
    }

}

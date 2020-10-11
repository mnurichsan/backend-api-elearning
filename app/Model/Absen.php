<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'id_mapel', 'id_user', 'name', 'start_at', 'end_at'];
    protected $dates = ['start_at', 'end_at'];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use SoftDeletes;
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'slug', 'id_jurusan', 'id_user', 'image'];

    public function jurusan()
    {
        return $this->belongsTo('App\Model\Jurusan', 'id_jurusan', 'id');
    }

    public function walikelas()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'slug', 'id_kelas', 'id_user', 'description'];

    public function kelas()
    {
        return $this->belongsTo('App\Model\Kelas', 'id_kelas', 'id');
    }
}

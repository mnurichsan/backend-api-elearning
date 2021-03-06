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

    public function guru()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function tugas()
    {
        return $this->hasMany('App\Model\Tugas', 'id_mapel', 'id');
    }

    public function absen()
    {
        return $this->hasMany('App\Model\Absen', 'id_mapel', 'id');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'id_mapel', 'name', 'start_at', 'end_at'];
    protected $dates = ['start_at', 'end_at'];

    public function mapel()
    {
        return $this->belongsTo('App\Model\Mapel', 'id_mapel', 'id');
    }

    public function kumpulTugas()
    {
        return $this->hasMany('App\Model\KumpulTugas', 'id_tugas', 'id');
    }
}

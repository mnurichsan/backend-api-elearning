<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KumpulTugas extends Model
{
    public $incrementing = false;
    protected $dates = ['tanggal_kumpul'];
    protected $fillable = ['id', 'id_tugas', 'id_user', 'file', 'tanggal_kumpul', 'nilai'];

    public function tugas()
    {
        return $this->belongsTo('App\Model\Tugas', 'id_tugas', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
}

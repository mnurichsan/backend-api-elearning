<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    use SoftDeletes;
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'description', 'image'];

    public function kelas()
    {
        return $this->hasMany('App\Model\Kelas', 'id_jurusan', 'id');
    }
}

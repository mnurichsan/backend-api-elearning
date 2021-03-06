<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'roles', 'id_kelas', 'id_jurusan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kelas()
    {
        return $this->hasOne('App\Model\Kelas', 'user_id', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Model\Kelas', 'id_kelas', 'id');
    }

    public function mapel()
    {
        return $this->hasOne('App\Model\Mapel', 'id_user', 'id');
    }

    public function kumpulTugas()
    {
        return $this->hasMany('App\Model\KumpulTugas', 'id_user', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'foto',
        'fakultas',
        'department',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_absen',
        'kelompok'
    ];
}

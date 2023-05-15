<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'hp',
        'alamat',
        'prodi_id'
    ];

    public function prodi(){
        return $this->hasOne(ProdiModel::class, 'prodi_id', 'prodi_id');
    }

    public function hobby(){
        return $this->hasOne(HobbyModel::class, 'mahasiswa_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table="mahasiswa"; // Eloquent akan membuat model mahasiswa 
    public $timestamps= false;
    protected $primaryKey = 'Nim'; // Memanggil isi DB Dengan primarykey
    /**
    * The attributes that are mass assignable.* *
    @var array
    */
    protected $fillable = [
    'Nim',
    'Nama',
    'Kelas',
    'Jurusan',
    'No_Handphone',
    'kelas_id'
    ];
    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class,'kelas_id','id');
    }
}

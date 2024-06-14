<?php

/* diubah yang di atas
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;*/


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facedas\Redirect;


class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $fillable = [
        'id',
        'kode',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat',
        'kelurahan_id'
    ];

    public $timestamps = false;

}


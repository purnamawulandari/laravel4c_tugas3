<?php

namespace App;

use App\Makul;
use App\User;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table     = 'nilai';
   protected $fillable  = ['makul_id', 'mahasiswa_id', 'nilai' ];
   public $timestamps   = false;

   
 public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function makul()
    {
        return $this->belongsTo(Makul::class, 'makul_id', 'id');
    }
}

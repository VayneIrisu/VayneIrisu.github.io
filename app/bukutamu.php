<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bukutamu extends Model
{
    //
    protected $table = 'bukutamu';

    protected $fillable = ['nama','alamat','email','pesan'];
}

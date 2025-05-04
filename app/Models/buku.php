<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'D02233_buku';
    protected $fillable = ['judul','pengarang','tahun_terbit'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Child extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'berat_badan',
        'tinggi_badan',
        'parent_id'
    ];
    public function parent()
    {
        return $this->belongsTo(User::class);
    }
}

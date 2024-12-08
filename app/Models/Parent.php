<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_hp',
        'umur',
        'berat_badan',
        'tinggi_badan',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function child()
    {
        return $this->hasMany(Child::class);
    }
}

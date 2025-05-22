<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // biar bsa nambah data
    protected $fillable = [
        'user_id',
        'jabatan',
        'gaji_pokok'
    ];
    // relasiii
    public function user() {
        return $this->belongsTo(User::class);
    }
}

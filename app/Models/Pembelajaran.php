<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    use HasFactory;
    protected $table = "pembelajarans";
    protected $fillable = [
        'pertanyaan',
        'sangat_besar',
        'besar',
        'cukup',
        'kurang',
        'tidak_sama_sekali'
    ];
}

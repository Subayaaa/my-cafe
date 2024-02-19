<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi extends Model
{
    use HasFactory;

    protected $table = 'detail__transaksis';

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    protected $fillable = [
        'id',
        'nota',
        'id_stuff',
        'count',
        'price',
        'discount',
    ];
}

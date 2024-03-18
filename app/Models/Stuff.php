<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class Stuff extends Model
{
    use HasFactory;

    protected $table = 'stuffs';

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'name',
        'price',
        'unit',
        'status',
        'image',
        'id_category',
    ];

    function category()
    {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }

    function detail()
    {
        return $this->hasMany(Detail_Transaksi::class, 'id_stuff', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $primaryKey = 'symbol';

    protected $fillable = [
        'symbol',
        'pool_name',
        'name',
        'scheme',
        'color',
        'icon_url',
        'externals'
    ];
}

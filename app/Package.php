<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $fillable = [
        'name', 'amount', 'premium'
    ];

    public function detailsPackage()
    {
        # code...
        return $this->hasMany(DetailPackage::class);
    }
}

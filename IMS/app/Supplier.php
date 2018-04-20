<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';

    /**
     * Get the supplier for the products.
     */
    public function supplier()
    {
        return $this->hasOne('App\Supplier');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    /**
     * Get the supplier for the products.
     */
    public function supplier()
    {
        return $this->hasOne('App\Supplier', 'id', 'supplier_id');
    }
}

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

    /**
     * Get the stocks for the products.
     */
    public function stocks()
    {
        return $this->hasOne('App\Stocks', 'product_id', 'id');
    }
}

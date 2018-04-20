<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';

    /**
     * Get the products for the supplier.
     */
    public function product()
    {
        return $this->hasOne('App\Product', 'supplier_id', 'id');
    }
}

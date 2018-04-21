<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    protected $table = 'stocks';

    /**
     * Get the products for the stock.
     */
    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }

}

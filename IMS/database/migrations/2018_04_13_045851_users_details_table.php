
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->boolean('permission_customer');
            $table->boolean('permission_supplier');
            $table->boolean('permission_product');
            $table->boolean('permission_stocks');
            $table->boolean('permission_sales');
            $table->boolean('permission_payment');
            $table->boolean('permission_report');
            $table->boolean('permission_users');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_details');
    }
}
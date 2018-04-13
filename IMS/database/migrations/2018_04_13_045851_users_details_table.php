
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
            $table->boolean('permission_customer')->default(0);
            $table->boolean('permission_supplier')->default(0);
            $table->boolean('permission_product')->default(0);
            $table->boolean('permission_stocks')->default(0);
            $table->boolean('permission_sales')->default(0);
            $table->boolean('permission_payment')->default(0);
            $table->boolean('permission_report')->default(0);
            $table->boolean('permission_users')->default(0);
            $table->boolean('status')->default(1);
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
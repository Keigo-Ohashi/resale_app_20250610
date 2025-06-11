<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId("user_id")->constrained()->restrictOnDelete();
            $table->foreignId("item_id")->constrained()->restrictOnDelete();
            $table->foreignId("payment_id")->constrained()->restrictOnDelete();
            $table->char("postal_code", 8);
            $table->string("address");
            $table->string("building")->nullable();
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
        Schema::dropIfExists('orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    : void
    {
        Schema::create('removed_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->timestamp('removed_at');
            $table->boolean('returned_to_cart')->default(0); //check item was returned to cart later by same user
            $table->unsignedDouble('removed_at_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    : void
    {
        Schema::dropIfExists('removed_items');
    }
};

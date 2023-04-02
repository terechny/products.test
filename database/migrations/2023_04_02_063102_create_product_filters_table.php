<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_filters', function (Blueprint $table) {

            $table->foreignId('product_id')
                  ->constrained('products')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->foreignId('filter_value_id')
                  ->constrained('filter_values')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate(); 
                
            $table->primary(['product_id', 'filter_value_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_filters');
    }
}

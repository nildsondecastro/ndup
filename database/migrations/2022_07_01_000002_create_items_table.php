<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id('items_id');

            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('link')->nullable();

            $table->double('price', 10, 2);
            $table->text('description')->nullable();

            $table->boolean('active')->default(false);

            $table->bigInteger('portfolios_id');
            $table->foreign('portfolios_id')
                ->references('portfolios_id')
                ->on('portfolios');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id('portfolios_id');

            $table->string('name');
            $table->string('photo')->nullable();
            $table->string('link')->nullable();

            $table->text('description')->nullable();

            $table->boolean('active')->default(false);

            $table->boolean('is_sample')->default(false);
            $table->bigInteger('users_id')->nullable();
            $table->foreign('users_id')
                ->references('id')
                ->on('users');

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
        Schema::dropIfExists('portfolios');
    }
}

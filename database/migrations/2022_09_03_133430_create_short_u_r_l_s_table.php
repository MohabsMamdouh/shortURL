<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_u_r_l_s', function (Blueprint $table) {
            $table->id();
            $table->text('original_url');
            $table->string('short_url')->nullable();
            $table->timestamps();
        });

        DB::update("ALTER TABLE short_u_r_l_s AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('short_u_r_l_s');
    }
};

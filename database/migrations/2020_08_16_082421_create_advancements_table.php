<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvancementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //REF https://minecraft.gamepedia.com/Advancement
        Schema::create('advancements', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('name');
            $table->longText('description');
            $table->string('parent')->nullable();
            $table->longText('requirements');
            $table->string('namespace');
            $table->string('rewards')->nullable()->default('-');
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
        Schema::dropIfExists('advancements');
    }
}

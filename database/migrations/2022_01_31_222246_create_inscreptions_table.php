<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscreptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscreptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained()->onDelete("cascade");
            $table->foreignId('formation_id')->nullable()->constrained()->onDelete("cascade");
            $table->string('name')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('title_de_formation')->nullable();
            $table->date('date_inscreption')->nullable();
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
        Schema::dropIfExists('inscreptions');
    }
}

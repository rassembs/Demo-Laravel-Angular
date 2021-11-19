<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeTiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_tiers', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('designation');
            $table->boolean('has_remise');
            $table->boolean('has_fodec');
            $table->boolean('has_exonoration');
            $table->boolean('has_timber');
            $table->boolean('has_tva');
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
        Schema::dropIfExists('type_tiers');
    }
}

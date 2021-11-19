<?php

use App\Models\Adresse;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banques', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('logo');
            $table->unsignedSmallInteger('code_banque')->nullable();
            $table->unsignedSmallInteger('code_agence')->nullable();
            $table->foreignIdFor(Adresse::class);
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
        Schema::dropIfExists('banques');
    }
}

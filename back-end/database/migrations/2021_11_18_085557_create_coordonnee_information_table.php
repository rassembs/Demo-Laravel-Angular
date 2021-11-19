<?php

use App\Models\Coordonnee;
use App\Models\Information;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordonneeInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordonnee_information', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Coordonnee::class);
            $table->foreignIdFor(Information::class);
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
        Schema::dropIfExists('coordonnee_information');
    }
}

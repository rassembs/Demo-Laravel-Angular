<?php

use App\Models\CompteBancaire;
use App\Models\Coordonnee;
use App\Models\Exonoration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiers', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nom');
            $table->foreignIdFor(Coordonnee::class);
            $table->float('taux_remise', 4, 2)->nullable();
            $table->float('fodec', 4, 2)->nullable();
            $table->float('tva', 4, 2)->nullable();
            $table->foreignIdFor(Exonoration::class)->nullable();
            $table->float('timbre', 8, 2)->nullable();
            $table->foreignIdFor(CompteBancaire::class)->nullable();


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
        Schema::dropIfExists('tiers');
    }
}

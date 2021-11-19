<?php

use App\Models\Tier;
use App\Models\TypeTier;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTierTypeTierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tier_type_tier', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tier::class);
            $table->foreignIdFor(TypeTier::class);
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
        Schema::dropIfExists('tier_type_tier');
    }
}

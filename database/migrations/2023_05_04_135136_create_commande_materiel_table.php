<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Commande;
use App\Models\Materiel;

class CreateCommandeMaterielTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_materiel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qty');
            $table->ForeignIdFor(Commande::class);
            $table->ForeignIdFor(Materiel::class);
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
        Schema::dropIfExists('commande_materiel');
    }
}

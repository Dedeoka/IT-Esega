<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValoPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valo_players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('valo_teams')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('nick');
            $table->string('tagline');
            $table->string('no_hp');
            $table->string('tanda_tangan');
            $table->string('foto');
            $table->enum('role', ['ketua', 'member', 'cadangan']);
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
        Schema::dropIfExists('valo_players');
    }
}

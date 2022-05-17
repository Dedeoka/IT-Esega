<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMolePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mole_players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('mole_teams')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('nick');
            $table->string('id_server');
            $table->string('no_hp');
            $table->string('email');
            $table->string('tanda_tangan')->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('mole_players');
    }
}

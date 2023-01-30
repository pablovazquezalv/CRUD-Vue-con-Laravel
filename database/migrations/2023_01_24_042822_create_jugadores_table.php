
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",100);
            $table->string("apellido_paterno",100);
            $table->string("apellido_materno",100);
            $table->string("edad",3);
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->foreign("equipo_id")->nullable()->references('id')->on("equipos")->onDelete('cascade');
           
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
        Schema::dropIfExists('jugadores');
    }
};

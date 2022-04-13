<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnicoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Tecnico";

    /**
     * Run the migrations.
     * @table Tecnico
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("idTecnico");
            $table->string("Disponibilidad", 45);
            $table->integer("Terceros_idTerceros")->unsigned();


            $table->foreign("Terceros_idTerceros")
                ->references("idTerceros")->on("Terceros")
                ->onDelete("cascade")
                ->onUpdate("cascade");

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
        Schema::dropIfExists($this->tableName);
    }
}

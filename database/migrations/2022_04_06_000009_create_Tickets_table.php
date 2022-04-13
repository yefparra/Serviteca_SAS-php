<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Tickets";

    /**
     * Run the migrations.
     * @table Tickets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("idTickets");
            $table->string("Asunto", 45);
            $table->integer("Terceros_idTerceros")->unsigned();
            $table->integer("Servicios_idServicios")->unsigned();
            $table->integer("Estado_idEstado")->unsigned();

            $table->foreign("Terceros_idTerceros")
                ->references("idTerceros")->on("Terceros")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("Servicios_idServicios")
                ->references("idServicios")->on("Servicios")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("Estado_idEstado")
                ->references("idEstado")->on("Estado")
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

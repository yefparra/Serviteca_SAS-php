<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnicoHasTicketsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Tecnico_has_Tickets";

    /**
     * Run the migrations.
     * @table Tecnico_has_Tickets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("Tecnico_idTecnico");
            $table->string("Fecha", 45);
            $table->integer("Tickets_idTickets")->unsigned();

            $table->foreign("Tecnico_idTecnico")
                ->references("idTecnico")->on("Tecnico")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("Tickets_idTickets")
                ->references("idTickets")->on("Tickets")
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

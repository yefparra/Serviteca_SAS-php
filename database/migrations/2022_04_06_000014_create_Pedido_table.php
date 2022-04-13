<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Pedido";

    /**
     * Run the migrations.
     * @table Pedido
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("idPedido");
            $table->integer("Gestion_idGestion")->unsigned();
            $table->integer("Cuerpo_idCuerpo")->unsigned();

            $table->foreign("Gestion_idGestion")
                ->references("idGestion")->on("Gestion")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("Cuerpo_idCuerpo")
                ->references("idCuerpo")->on("Cuerpo")
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

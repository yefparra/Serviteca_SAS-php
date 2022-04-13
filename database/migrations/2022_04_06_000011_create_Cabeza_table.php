<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabezaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Cabeza";

    /**
     * Run the migrations.
     * @table Cabeza
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("idCabeza");
            $table->integer("Terceros_idTerceros")->unsigned();
            $table->integer("Tipo_Pedido_idTipo_Pedido")->unsigned();

            $table->foreign("Terceros_idTerceros")
                ->references("idTerceros")->on("Terceros")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("Tipo_Pedido_idTipo_Pedido")
                ->references("idTipo_Pedido")->on("Tipo_Pedido")
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuerpoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Cuerpo";

    /**
     * Run the migrations.
     * @table Cuerpo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("idCuerpo");
            $table->integer("Productos_idProductos")->unsigned();
            $table->integer("Cabeza_idCabeza")->unsigned();

            $table->foreign("Productos_idProductos")
                ->references("idProductos")->on("Productos")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("Cabeza_idCabeza")
                ->references("idCabeza")->on("Cabeza")
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

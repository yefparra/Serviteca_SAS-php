<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Productos";

    /**
     * Run the migrations.
     * @table Productos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("idProductos");
            $table->string("Nombre_Producto", 45);
            $table->string("Descripcion_Producto", 45);
            $table->decimal("Precio");
            $table->integer("Stock_idStock")->unsigned();

            $table->foreign("Stock_idStock")
                ->references("idStock")->on("Stock")
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

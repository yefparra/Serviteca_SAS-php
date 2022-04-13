<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercerosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = "Terceros";

    /**
     * Run the migrations.
     * @table Terceros
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments("idTerceros");
            $table->string("Nombre", 45);
            $table->string("Apellido", 45);
            $table->string("Telefono", 45);
            $table->string("Cedula", 45);
            $table->string("Direccion", 45);
            $table->string("Correo", 45);
            $table->string("Contraseña", 45);
            $table->integer("Empresa_idEmpresa")->unsigned();
            $table->integer("Rol_idRol")->unsigned();

            $table->foreign("Empresa_idEmpresa")
                ->references("idEmpresa")->on("Empresa")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->foreign("Rol_idRol")
                ->references("idRol")->on("Rol")
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

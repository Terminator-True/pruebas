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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();//integer Unsigned increment
            $table->string("name");//Varchar max 250 caracteres
            $table->text("descripcion");//(text)Utilizado para texto mayor de 250 caracteres
            $table->text("categoria");
            $table->timestamps();//created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};

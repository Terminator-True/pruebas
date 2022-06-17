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
        Schema::create('users', function (Blueprint $table) {
            $table->id();//integer Unsigned increment
            $table->string('name');//Varchar
            // $table->text(); # Utilizado para texto mayor de 250 caracteres
            $table->string('email')->unique();//Varchar
            $table->timestamp('email_verified_at')->nullable();//Varchar
            $table->string('password');//Varchar
            $table->rememberToken();//Token de inicio de sesión
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
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('crud', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',100);
            $table->string('phone',10);
            $table->string('password',20);
            $table->string('cpassword',20);
            $table->string('address')->nullable();
            $table->enum('gender',['m','f','o']);
            $table->string('DOB')->nullable();
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
        Schema::dropIfExists('crud');
    }
};

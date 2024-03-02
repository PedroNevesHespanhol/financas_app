<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->decimal('value', 8, 2);
            $table->string('payment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('despesas');
    }
};

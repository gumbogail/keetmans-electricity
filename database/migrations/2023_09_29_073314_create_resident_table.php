<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resident', function (Blueprint $table) {
            $table->id();//this is calling a method the arrow
            $table-> string('first_name');
            $table-> string('surname');
            $table-> string('cellphone_number');
            $table-> string('home_telephone');
            $table-> string('address_line_1');
            $table-> string('address_line_2');
            $table-> string('address_line_3');
            $table->timestamps();//time stamps keeps track of when  records where made 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident');
    }
};

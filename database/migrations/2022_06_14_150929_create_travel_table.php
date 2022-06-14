<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('image', 300);
            $table->text('description');
            $table->boolean('is_avaible');
            $table->date('date_check_in')->nullable();
            $table->date('date_check_out')->nullable();
            $table->string('number_of_people', 3);
            $table->text('type_of_person');
            $table->string('location');
            $table->string('type_of_location')->nullable();
            $table->float('price', 7, 2, true);
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
        Schema::dropIfExists('travel');
    }
}

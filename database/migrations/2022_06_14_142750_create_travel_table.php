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
            $table->date('date_check_in');
            $table->date('date_check_out');
            $table->string('number_of_people');
            $table->string('type_of_person');
            $table->string('type_location')->nullable();
            $table->string('state');
            $table->char('city');
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

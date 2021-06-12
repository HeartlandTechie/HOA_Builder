<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddYearCreated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('minutes_data', function (Blueprint $table) {
            //
            $table->string('year_created', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('minutes_data', function (Blueprint $table) {
            //
            $table->dropColumn('year_created');
        });
    }
}

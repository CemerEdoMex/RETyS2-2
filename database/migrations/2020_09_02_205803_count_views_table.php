<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countTableViews', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->bigInteger('count')->default(0);
            $table->char('category', 150);
            $table->foreign('id_tramiteoservicio')->references('id_tramiteoservicio')->on('tramite_o_servicio');
            $table->char('transactName',150);
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
        Schema::dropIfExists('countTableViews');
    }
}

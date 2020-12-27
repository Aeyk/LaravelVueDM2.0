<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailingListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailing_list', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();

            $table->string('name')->nullable();
            $table->string('zipCode')->nullable();

            $table->integer('mailing_list_group_id')->unsigned()
                  ->references('id')
                  ->on('mailing_list_group');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('mailing_list');

    }
}

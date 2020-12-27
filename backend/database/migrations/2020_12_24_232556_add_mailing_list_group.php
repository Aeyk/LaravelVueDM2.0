<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMailingListGroup extends Migration
{

        public function up()
        {
            Schema::create('mailing_list_group', function (Blueprint $table) {
                $table->increments('id');
            });
            
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mailing_list_group');
    }
}

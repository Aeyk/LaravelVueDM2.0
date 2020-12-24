<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMailingListGroupIdToMailingList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mailing_lists', function (Blueprint $table) {
            $table->foreignId('mailing_list_group_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mailing_lists', function (Blueprint $table) {
            $table->foreignId('mailing_list_group_id') ;
        });
    }
}

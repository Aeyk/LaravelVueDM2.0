<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameMailingDestinationsMailingLists extends Migration
{
    /**
     * Rename the mailing_destinations table to mailing_lists.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('mailing_destinations', 'mailing_lists');
    }

    /**
     * Rename the mailing_lists table to mailing_destinations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('mailing_lists', 'mailing_destinations');
    }
}

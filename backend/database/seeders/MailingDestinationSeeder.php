<?php

namespace Database\Seeders;


use JeroenZwart\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;

class MailingDestinationSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/test_mailing_data.csv';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://github.com/jeroenzwart/laravel-csv-seeder
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
        parent::run();
    }
}

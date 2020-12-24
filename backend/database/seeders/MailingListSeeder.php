<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailingListSeeder extends Seeder
{
    public function __construct()
    {
        $this->filename = base_path('database/seeds/csvs/test_mailing_data.csv');
        $this->file_data = file_get_contents($this->filename);
        $this->json_data = json_decode($this->file_data, true);
        // $this->csv_fd = str_getcsv(file_get_contents($this->filename));
        $this->table = 'mailing_lists';
        $this->mapping = [
            0 => 'name',
            1 => 'zipcode'
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo $this->filename;
        echo "\n";
        $id = 0;
        foreach($this->json_data as $db_entry) {
            // echo $db_entry['uuid'];
            echo " \n";
            DB::table($this->table)->insertGetId([
                'id' => $id,
                'name' => $db_entry['name'],
                'zip' => $db_entry['zip']
            ]);
            $id = $id + 1;
        }
        echo "\n";
        // DB::disableQueryLog();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Data\BoatData;

class BoatsSeeder extends Seeder
{
    private $boats_data = [];
    public function __construct()
    {
        $this->boats_data = (new BoatData())->getBoatData();
    }
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
       
        DB::table('boats')->insert($this->boats_data);
    }
}

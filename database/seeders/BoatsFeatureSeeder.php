<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Data\BoatDataFeature;

class BoatsFeatureSeeder extends Seeder
{
    private $boats_feature_data = [];
    public function __construct()
    {
        $this->boats_feature_data = (new BoatDataFeature())->getBoatFeatureData();
    }
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
       
        DB::table('boat_features')->insert($this->boats_feature_data);
    }
}

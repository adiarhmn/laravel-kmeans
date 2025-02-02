<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['latitude' => -3.329785, 'longitude' => 114.609667, 'name' => 'Budi'],
            ['latitude' => -3.327868, 'longitude' => 114.611276, 'name' => 'Joko'],
            ['latitude' => -3.327823, 'longitude' => 114.606223, 'name' => 'John'],
            ['latitude' => -3.329597, 'longitude' => 114.607036, 'name' => 'Siti'],
            ['latitude' => -3.323711, 'longitude' => 114.602988, 'name' => 'Ayu'],
            ['latitude' => -3.324739, 'longitude' => 114.597527, 'name' => 'Rina'],
            ['latitude' => -3.322222, 'longitude' => 114.597613, 'name' => 'Dewi'],
            ['latitude' => -3.320551, 'longitude' => 114.598321, 'name' => 'Tono'],
            ['latitude' => -3.319812, 'longitude' => 114.599222, 'name' => 'Rudi'],
            ['latitude' => -3.318355, 'longitude' => 114.597720, 'name' => 'Lina'],
            ['latitude' => -3.319689, 'longitude' => 114.589209, 'name' => 'Andi'],
            ['latitude' => -3.320353, 'longitude' => 114.587850, 'name' => 'Yudi'],
            ['latitude' => -3.320840, 'longitude' => 114.587340, 'name' => 'Nina'],
            ['latitude' => -3.317664, 'longitude' => 114.587871, 'name' => 'Doni'],
            ['latitude' => -3.316015, 'longitude' => 114.588520, 'name' => 'Eka'],
            ['latitude' => -3.315292, 'longitude' => 114.591798, 'name' => 'Fani'],
            ['latitude' => -3.315447, 'longitude' => 114.593536, 'name' => 'Gina'],
            ['latitude' => -3.314205, 'longitude' => 114.594174, 'name' => 'Hana'],
            ['latitude' => -3.314066, 'longitude' => 114.594560, 'name' => 'Ika'],
            ['latitude' => -3.314061, 'longitude' => 114.595096, 'name' => 'Jaka'],
            ['latitude' => -3.319108, 'longitude' => 114.582581, 'name' => 'Kiki'],
            ['latitude' => -3.320265, 'longitude' => 114.579392, 'name' => 'Lala'],
            ['latitude' => -3.322669, 'longitude' => 114.581622, 'name' => 'Mira'],
            ['latitude' => -3.318299, 'longitude' => 114.581418, 'name' => 'Nana'],
            ['latitude' => -3.317849, 'longitude' => 114.582094, 'name' => 'Oni'],
            ['latitude' => -3.324940, 'longitude' => 114.581697, 'name' => 'Putu'],
            ['latitude' => -3.326054, 'longitude' => 114.581150, 'name' => 'Qori'],
            ['latitude' => -3.324608, 'longitude' => 114.577180, 'name' => 'Rani'],
            ['latitude' => -3.323398, 'longitude' => 114.575592, 'name' => 'Sari'],
            ['latitude' => -3.323205, 'longitude' => 114.576665, 'name' => 'Tina'],
        ];

        DB::table('locations')->insert($locations);
    }
}

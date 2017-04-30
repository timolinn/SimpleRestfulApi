<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $report = new \App\User([
          'phone_number' => '0813887775',
          'fire_location' => 'Yaba',
          'fire_magnitude' => 'Very wild',
          'fire_origin' => 'Petrol',
          'fire_object' => 'Petrol Tanker',
          'trapped_people' => 'Yes'
        ]);
        $report->save();

        $report = new \App\User([
          'phone_number' => '0813887775',
          'fire_location' => 'Ojuelagba',
          'fire_magnitude' => 'Fairly wild',
          'fire_origin' => 'Building',
          'fire_object' => 'Clothes',
          'trapped_people' => 'Yes'
        ]);
        $report->save();

        $report = new \App\User([
          'phone_number' => '0813887775',
          'fire_location' => 'Mowe',
          'fire_magnitude' => 'Very wild',
          'fire_origin' => 'Unknown',
          'fire_object' => 'Farm',
          'trapped_people' => 'Yes'
        ]);
        $report->save();
    }
}

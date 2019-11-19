<?php

use Illuminate\Database\Seeder;

class MotorMediaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MotorMediaDefaultCategoryTreeSeeder::class,
        ]);
    }
}

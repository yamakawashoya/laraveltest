<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ja_JP');

        for ($i = 0; $i < 35; $i++) {
            $contact = new Contact();
            $contact->fullname = $faker->name();
            $contact->gender = $faker->numberBetween(1, 2);
            $contact->email = $faker->unique()->email();
            $contact->postcode = $faker->postcode();
            $contact->address = $faker->address();
            $contact->building_name = $faker->optional()->buildingName();
            $contact->opinion = $faker->realText(200);
            $contact->save();
        }
    }
}
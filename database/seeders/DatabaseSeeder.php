<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $c = new Character;
        $c->price = 15.99;
        $c->label = 'Woody';
        $c->desc = 'Nice cowboy';
        $c->birth_date = '1996-03-27';
        $c->image_path = 'https://lumiere-a.akamaihd.net/v1/images/open-uri20150422-20810-10n7ovy_9b42e613.jpeg?region=0,0,450,450';
        $c->save();

        $c = new Character();
	    $c->price = 159.99;
        $c->label = 'Némo';
        $c->desc = 'Little orange clown fish';
        $c->birth_date = '2003-11-26';
        $c->image_path = 'https://thumb.canalplus.pro/http/unsafe/1200x630/filters:quality(80)/img-hapi.canalplus.pro:80/ServiceImage/ImageID/114626297';
        $c->save();

        $c = new Character();
        $c->price = 59.99;
        $c->label = 'Carl';
        $c->desc = 'Inlove old man';
        $c->birth_date = '2009-07-29';
        $c->image_path = 'https://uplefilm.wordpress.com/wp-content/uploads/2015/05/carl-fredricksen-up.jpg';
        $c->save();

        $c = new Character();
        $c->price = 2.99;
        $c->label = 'Russell';
        $c->desc = 'Brave young adventurer';
        $c->birth_date = '2009-07-29';
        $c->image_path = 'https://lumiere-a.akamaihd.net/v1/images/up_thingsyoumissed_3_c06b4cd1.png';
        $c->save();



    }
}
